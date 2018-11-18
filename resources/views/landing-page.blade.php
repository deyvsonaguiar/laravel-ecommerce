<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraCommerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container">
                <div class="logo">Laravel E-commerce</div>
                <ul>
                    <li>
                    <li><a href="{{ route('shop.index') }}">Loja</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Carrinho <span class="cart-count"><span>3</span></span></a></li>
                </ul>
            </div> <!-- Fim do top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Laravel E-commerce</h1>
                    <p>Um exemplo prático usando a tecnologia de CSS Grid para um típico layout de website.</p>
                    <div class="hero-buttons">
                        <a href="" class="button button-white">Botão 1</a>
                        <a href="" class="button button-white">Botão 2</a>
                    </div>
                </div> <!-- fim do hero-copy -->

                <div class="hero-image">
                    <img src="img/macbook-bg.png" alt="hero image">
                </div>
            </div> <!-- fim do hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Laravel E-commerce</h1>
                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id ligula auctor condimentum. Curabitur iaculis quam justo, nec venenatis orci vulputate sollicitudin. Maecenas fringilla euismod est, sed fringilla augue.</p>
                <div class="text-center button-container">
                    <a href="" class="button">Destaque</a>
                    <a href="" class="button">À Venda</a>
                </div>

                <div class="products text-center">
                @foreach($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}">
                            <img src="{{ asset('img/products/'.$product->slug.'.png') }}" alt="product">
                        </a>
                        <a href="{{ route('shop.show', $product->slug) }}">
                            <div class="product-name">{{ $product->name }}</div>
                        </a>
                        <div class="product-price">R$ {{ $product->presentPrice() }}</div>
                    </div>
                @endforeach

                </div><!-- Fim de Produtos -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">Visualizar todos os produtos</a>
                </div>
            </div> <!-- Fim de container -->
        </div> <!-- Fim de Featured -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Para seu Blog</h1>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id ligula auctor condimentum. Curabitur iaculis quam justo, nec venenatis orci vulputate sollicitudin.</p>
                <div class="blog-posts">
                    <div class="blog-post">
                        <a href=""><img src="img/macbook-post.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Postagem 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id ligula auctor condimentum. Curabitur iaculis quam justo, nec venenatis orci vulputate sollicitudin?</div>
                    </div>
                    <div class="blog-post">
                        <a href=""><img src="img/macbook-post.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Postagem 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id ligula auctor condimentum. Curabitur iaculis quam justo, nec venenatis orci vulputate sollicitudin?</div>
                    </div>
                    <div class="blog-post">
                        <a href=""><img src="img/macbook-post.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Postagem 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id ligula auctor condimentum. Curabitur iaculis quam justo, nec venenatis orci vulputate sollicitudin?</div>
                    </div>
                </div> <!-- fim do blog-posts -->
            </div> <!-- fim do container -->
        </div> <!-- fim do blog-section -->

        @include('partials.footer')

    </body>
</html>
