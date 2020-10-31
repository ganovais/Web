@extends('site.layout')

@section('title')
E-softgraf - Wishlist
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        @for($i=1; $i<=4; $i++)
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            @include('site.widgets.product-wishlist', ['index' => $i])
        </div>
        @endfor
    </div>
</div>
@endsection