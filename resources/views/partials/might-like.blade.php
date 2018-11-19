<div class="might-like-section">
    <div class="container">
        <h2>Você também poderá gostar de...</h2>
        <div class="might-like-grid">
            @foreach($mightAlsoLike as $product)
                <a href="#" class="might-like-product">
                    <img src="{{ asset('img/products/'.$product->slug.'.png') }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">R$ {{ $product->presentPrice() }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
