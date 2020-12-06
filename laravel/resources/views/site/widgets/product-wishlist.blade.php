<div class="product">
    <div class="product-header">
        <div class="product-subheader">
            <i data-id="{{ $product->id }}" class="p-2 remove-product-wishlist fas fa-trash-alt"></i>
            <span class="badge badge-theme">{{ $product->category->title }}</span>
        </div>
        <a href="{{ url('produto/' . $product->slug) }}">
            <img class="img-fluid" src="{{ asset($product->image->path) }}" />
        </a>
    </div>

    <div class="product-footer">
        <a href="{{ url('produto/' . $product->slug) }}">
            <p class="m-0">{{ $product->title }}</p>
        </a>
        <p class="pr-3 m-0"><b>R$ {{ $product->price }}</b></p>
        <i class="add-item-cart fas fa-cart-plus"></i>
    </div>
</div>
</a>
