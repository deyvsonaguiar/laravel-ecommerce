<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Laravel E-commerce</a></div>
        <ul>
            <li>
            <li><a href="{{ route('shop.index') }}">Loja</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="{{ route('cart.index') }}">Carrinho<span class="cart-count">
                        @if(Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span></span>
                        @endif
                </a>
            </li>
        </ul>
    </div> <!-- Fim do top-nav -->
</header>
