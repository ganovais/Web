<?php

namespace App\Http\Controllers\Site;

use App\Modules\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Requests\ContactRequest;
use App\Services\CategoryService;
use App\Services\ContactService;
use App\Services\ProductService;

class SiteController extends Controller
{
    public function __construct(ContactService $contact_service, CategoryService $category_service, ProductService $product_service)
    {
        $this->contact_service = $contact_service;
        $this->category_service = $category_service;
        $this->product_service = $product_service;
    }

    public function index()
    {
        $products = $this->product_service->model->with('category', 'image')->get()->take(4);
        $categories = $this->category_service->model->get();
        return view('site.home.index', compact('products', 'categories'));
    }

    public function products(Request $request)
    {
        $categories = $this->category_service->model->get();
        $products = $this->product_service->model->with('category', 'image');

        if(isset($request->category)) {
            $products = $products->where('category_id', $request->category);
        }

        if(isset($request->title)) {
            $products = $products->where('title', 'LIKE', '%' . $request->title . '%');
        }

        $products = $products->get();

        return view('site.products.index', compact('categories', 'products'));
    }

    public function cart()
    {
        return view('site.cart.index');
    }

    public function checkout()
    {
        return view('site.checkout.index');
    }

    public function thanks()
    {
        return view('site.checkout.thanks');
    }

    public function contact()
    {
        $config = Config::all()->pluck('value', 'key')->toArray();
        // dd($config);
        return view('site.contact.index', compact('config'));
    }

    public function detail($slug)
    {
        $product = $this->product_service->model->where('slug', $slug)->first();
        $products = $this->product_service->model->with('category', 'image')->where('slug', '<>', $slug)->get()->take(4);
        return view('site.products.detail.index', compact('product', 'products'));
    }

    public function login()
    {
        return view('site.auth.login');
    }

    public function wishlist()
    {
        return view('site.wishlist.index');
    }

    public function send(ContactRequest $request)
    {
        return response()->json([
            'error' => false,
            'message' => $this->contact_service->send($request->toArray()),
        ]);
    }
}
