<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Requests\ProductRequest;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    public function __construct(ProductService $product_service, CategoryService $category_service)
    {
        $this->product_service = $product_service;
        $this->category_service = $category_service;
    }
 
    public function index()
    {
        $products = $this->product_service->model->get();
        return view('system.products.list', compact('products'));
    }

    public function create()
    {
        $categories = $this->category_service->model->get();
        return view('system.products.create', compact('categories'));
    }

    public function edit($id)
    {
        $categories = $this->category_service->model->get();
        $product = $this->product_service->model->findOrFail($id);
        return view('system.products.create', compact('categories', 'product'));
    }

    public function show($id)
    {
        return response()->json([
            'error' => false,
            'product' => $this->product_service->model->with('category', 'image')->findOrFail($id)
        ]);
    }

    public function store(ProductRequest $request)
    {
        return response()->json([
            'error' => false,
            'product' => $this->product_service->store($request->toArray()),
            'message' => 'Cadastrado com sucesso'
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
        return response()->json([
            'error' => false,
            'product' => $this->product_service->update($request->toArray(), $id),
            'message' => 'Alterado com sucesso'
        ]);
    }

}