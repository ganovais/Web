<?php

namespace App\Services;

use App\Modules\Image;
use App\Modules\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use File;

class ProductService
{
    public function __construct(Product $model, Image $image_model)
    {
        $this->model = $model;
        $this->image_model = $image_model;
    }

    public function store(array $data)
    {
        try {
            DB::beginTransaction();

            $data['slug'] = Str::slug($data['title'], '-');
            
            $this->save_file($_FILES, $data);

            $model = $this->model->create($data);

            $image = [
                'path' => '/site/uploads/products' . '/' . $name,
                'imageable_id' => $model->id,
                'imageable_type' => 'products',
                'category' => 'image'
            ];

            $this->image_model->create($image);

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return $model;
    }

    public function update(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $model = $this->model->findOrFail($id);

            $data['slug'] = Str::slug($data['title'], '-');

            if(!empty($_FILES['image']['name'])) {
                $image = $model->image;
                $path = './site/uploads/products/';
                $name_arr = explode('/', $image->path);
                
                if(file_exists($path . $name_arr[4]) && $name_arr[4] != '') {
                    unlink($path . $name_arr[4]);
                }
                $this->save_file($_FILES, $data);

                $image->delete();

                $image = [
                    'path' => '/site/uploads/products' . '/' . $_FILES['image']['name'],
                    'imageable_id' => $model->id,
                    'imageable_type' => 'products',
                    'category' => 'image'
                ];

                $this->image_model->create($image);

            }

            $model->update($data);

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return $model;
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $this->model->findOrFail($id)->delete();
            
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return true;
    }

    public function restore($id)
    {
        try {
            DB::beginTransaction();

            $this->model->onlyTrashed()->findOrFail($id)->restore();

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }

        return true;
    }

    public function save_file($file, $data) {
        $name = $file['image']['name'];
        $path = './site/uploads/products';
        if(!file_exists($path)) File::makeDirectory($path, 777, true);

        $output_file = $path . '/' . $name;
        $data['image']->move($path, $output_file);
    }
}
