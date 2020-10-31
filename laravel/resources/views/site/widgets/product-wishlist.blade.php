
    <div class="product">
        <div class="product-header">
            <div class="product-subheader">
                <i class="p-2 remove-product-wishlist fas fa-trash-alt"></i>
                <span class="badge badge-theme">Categoria</span>
            </div>
            <a href="{{ url('produto/doritos') }}">
                <img class="img-fluid" 
                    src="{{ asset('assets/images/products/' . $index . '.webp') }}" />
            </a>
        </div>

        <div class="product-footer">
            <a href="{{ url('produto/doritos') }}">
                <p class="m-0">Chocolate</p>
            </a>
            <p class="pr-3 m-0"><b>R$ 5,00</b></p>
            <i class="add-item-cart fas fa-cart-plus"></i>
        </div>
    </div>
</a>