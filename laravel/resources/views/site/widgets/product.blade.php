
    <div class="product">
        <div class="product-header">
            <div class="product-subheader">
                @if(Auth::check())
                <i data-id="{{ $product->id }}" class="p-2 fas fa-heart"></i>
                @endif
                <span class="badge badge-theme">{{ $product->category->title }}</span>
            </div>
            <a href="{{ url('produto/' . $product->slug) }}">
                <img class="img-fluid" 
                    src="{{ asset($product->image->path) }}" />
            </a>
        </div>

        <div class="product-footer">
            <a href="{{ url('produto/' . $product->slug) }}">
                <p class="m-0">{{ $product->title }}</p>
            </a>
            <p class="pr-3 m-0"><b>R$ {{ $product->price }}</b></p>
            <p class="times" id="times{{$product->id}}">1 x de R$2,00</p>
            <i class="add-item-cart fas fa-cart-plus"></i>
        </div>
    </div>
</a>


@section('script')
<script>

const _products = {!! isset($products_grid) ? $products_grid : $products !!};
const installment_value = {{ Value::get('installment_value') }}
const times = {{ Value::get('times') }}

console.log(_products);

document.addEventListener('DOMContentLoaded', function() {
    _products.forEach(product => {
        let times_index = 1;
        let parcela = product.price;

        if(installment_value != 0 && times != 0 ) {
            for(let i=1; i<= times; i++) {
                if(parcela > installment_value) {
                    parcela = product.price/i;
                    times_index = i;
                }
            }
        }
        document.querySelector(`#times${product.id}`).innerHTML = `${times_index} x de R$ ${parcela}`;

    })
})
</script>
@endsection