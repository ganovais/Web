<?php

namespace App\Http\Controllers\Banners;

use App\Http\Controllers\Controller;
use App\Services\BannerService;
use App\Requests\BannerRequest;

class BannerController extends Controller
{
    public function __construct(BannerService $banner_service)
    {
        $this->banner_service = $banner_service;
    }
 
    public function index()
    {
        $banners = $this->banner_service->model->get();
        return view('system.banners.list', compact('banners'));
    }

    public function create()
    {
        return view('system.banners.create');
    }

    public function edit($id)
    {
        return view('system.banners.create');
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'banner' => $this->banner_service->model->with('image')->findOrFail($id)
        ]);
    }

    public function store(BannerRequest $request)
    {
        return response()->json([
            'error' => false,
            'banner' => $this->banner_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso'
        ]);
    }

    public function update(BannerRequest $request, $id)
    {
        return response()->json([
            'error' => false,
            'banner' => $this->banner_service->update($request->toArray(), $id),
            'message' => 'Alterado com sucesso'
        ]);
    }

    public function destroy($id)
    {
        $this->banner_service->destroy($id);

        return response()->json([
            'error' => false,
            'message' => 'Banner excluido com sucesso!',
        ]);
    }

}