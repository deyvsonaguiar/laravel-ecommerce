@extends('layout')

@section('title', $product->name)

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="{{ route('shop.index') }}">Shop</a></span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Macbook Pro</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div>
            <div class="product-section-image">
                <img src="{{ asset('img/macbook-post.png') }}" alt="product">
            </div>
        </div>

        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{{ $product->details }}</div>
            <div class="product-section-price">R$ {{ $product->presentPrice() }}</div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas magni accusantium, sapiente dicta iusto ut dignissimos atque placeat tempora iste.</p>
            <p>&nbsp;</p>
            <form action="{{ route('cart.store') }}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Adicionar ao Carrinho</button>
            </form>
        </div>
    </div> <!-- end products -->

    @include('partials.might-like')

    </div>
@endsection
