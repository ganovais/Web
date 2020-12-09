<?php

namespace App\Http\Controllers\Site;

use App\Modules\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Requests\ContactRequest;
use App\Services\BannerService;
use App\Services\CategoryService;
use App\Services\ContactService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Auth;
use App\User;

class SiteController extends Controller
{
    public function __construct(ContactService $contact_service, CategoryService $category_service, ProductService $product_service, BannerService $banner_service)
    {
        $this->contact_service = $contact_service;
        $this->category_service = $category_service;
        $this->product_service = $product_service;
        $this->banner_service = $banner_service;
    }

    public function index()
    {
        $products = $this->product_service->model->with('category', 'image')->get()->take(4);
        $categories = $this->category_service->model->get();

        $banners = $this->banner_service->model->get();
        return view('site.home.index', compact('products', 'categories', 'banners'));
    }

    public function products(Request $request)
    {
        $categories = $this->category_service->model->get();
        $products = $this->product_service->model->with('category', 'image')->where('active', 1);

        if(isset($request->category)) {
            $products = $products->where('category_id', $request->category);
        }

        if(isset($request->title)) {
            $products = $products->where('title', 'LIKE', '%' . $request->title . '%');
        }

        $products_grid = $products->get();
        $products = $products->paginate(12);

        $banners = $this->banner_service->model->get();

        return view('site.products.index', compact('categories', 'products', 'banners', 'products_grid'));
    }

    public function cart()
    {
        $banners = $this->banner_service->model->get();
        return view('site.cart.index', compact('banners'));
    }

    public function checkout()
    {
        $banners = $this->banner_service->model->get();
        return view('site.checkout.index', compact('banners'));
    }

    public function thanks()
    {
        $banners = $this->banner_service->model->get();
        return view('site.checkout.thanks', compact('banners'));
    }

    public function painel()
    {
        $user = Auth::user();
        
        $banners = $this->banner_service->model->get();

        return view('site.painel.index', compact('user', 'banners'));
    }

    public function orders()
    {
        $banners = $this->banner_service->model->get();

        return view('site.orders.index', compact('banners'));
    }

    public function contact()
    {
        $config = Config::all()->pluck('value', 'key')->toArray();
        // dd($config);

        $banners = $this->banner_service->model->get();

        return view('site.contact.index', compact('config', 'banners'));
    }

    public function detail($slug)
    {
        $product = $this->product_service->model->where('slug', $slug)->first();
        $products = $this->product_service->model->with('category', 'image')->where('slug', '<>', $slug)->get()->take(4);

        $banners = $this->banner_service->model->get();

        return view('site.products.detail.index', compact('product', 'products', 'banners'));
    }

    public function login()
    {
        return view('site.auth.login');
    }

    public function wishlist(User $model_user)
    {
        $banners = $this->banner_service->model->get();
        $products = $model_user->findOrFail(Auth::user()->id)->products->load('image', 'category');

        return view('site.wishlist.index', compact('banners', 'products'));
    }

    public function send(ContactRequest $request)
    {
        return response()->json([
            'error' => false,
            'message' => $this->contact_service->send($request->toArray()),
        ]);
    }

    public function liked_product($id, User $user_model)
    {
        $user = $user_model->findOrFail(Auth::user()->id);
        $user->products()->attach($id);

        return response()->json([
            'error' => false,
            'message' => 'Favoritado com sucesso'
        ]);
    }

    public function unlike_product($id, User $user_model)
    {
        $user = $user_model->findOrFail(Auth::user()->id);
        $user->products()->detach($id);
        // $user->products()->sync([1, 2]);
    }
}
