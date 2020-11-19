<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Requests\CategoryRequest;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function __construct(CategoryService $category_service) {
        $this->category_service = $category_service;
    }
    
    public function index()
    {
        $categories = $this->category_service->model->get();
        return view('system.categories.list', compact('categories'));
    }

    public function create()
    {
        return view('system.categories.create');
    }

    public function edit()
    {
        return view('system.categories.create');
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'category' => $this->category_service->model->findOrFail($id),
        ], 200);
    }

    public function store(CategoryRequest $request)
    {
        return response()->json([
            'error' => false,
            'category' => $this->category_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso',
        ], 200);
    }


    public function update(CategoryRequest $request, $id)
    {
        return response()->json([
            'error' => false,
            'category' => $this->category_service->update($request->toArray(), $id),
            'message' => 'Editado com sucesso',
        ], 200);
    }

    public function destroy($id)
    {
        return response()->json([
            'error' => false,
            'deleted' => $this->category_service->destroy($id),
            'message' => 'Deletado com sucesso',
        ], 200);
    }
}
