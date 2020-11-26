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
            
            $name = $_FILES['image']['name'];
            $path = './site/uploads/products';
            if(!file_exists($path)) File::makeDirectory($path, 0777, true);

            $output_file = $path . '/' . $name;
            $data['image']->move($path, $output_file);

            $model = $this->model->create($data);

            $image = [
                'path' => $output_file,
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

            // $data['slug'] = Str::slug($data['title'], '-');

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
}
