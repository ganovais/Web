<?php

namespace App\Services;

use App\Modules\Image;
use App\Modules\Banner;
use Illuminate\Support\Facades\DB;
use File;

class BannerService
{
    public function __construct(Banner $model, Image $image_model)
    {
        $this->model = $model;
        $this->image_model = $image_model;
    }

    public function store(array $data)
    {
        try {
            DB::beginTransaction();

            
            $this->save_file($_FILES, $data);
            $model = $this->model->create($data);

            $name = $_FILES['image']['name'];

            $image = [
                'path' => '/site/uploads/banners' . '/' . $name,
                'imageable_id' => $model->id,
                'imageable_type' => 'banners',
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

            if(!empty($_FILES['image']['name'])) {
                $image = $model->image;
                $path = './site/uploads/banners/';
                $name_arr = explode('/', $image->path);
                
                if(file_exists($path . $name_arr[4]) && $name_arr[4] != '') {
                    unlink($path . $name_arr[4]);
                }
                $this->save_file($_FILES, $data, 'banners');

                $image->delete();

                $image = [
                    'path' => '/site/uploads/banners' . '/' . $_FILES['image']['name'],
                    'imageable_id' => $model->id,
                    'imageable_type' => 'banners',
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

            $model = $this->model->findOrFail($id);
            
            $image = $model->image;

            if(file_exists('.' . $image->path)){
                unlink('.' . $image->path);
            }

            $image->delete();
            $model->delete();
            
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
        $path = './site/uploads/banners';
        if(!file_exists($path)) File::makeDirectory($path, 777, true);

        $output_file = $path . '/' . $name;
        $data['image']->move($path, $output_file);
    }
}
