<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{ route("site.home") }}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Accueil
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="{{ route('checkout.cart') }}">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							{{ $cartCount }}
						</span>
					</span>
                <span class="text">Panier</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="{{ route('login') }}">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Mon Compte
            </a>
        </div>
    </div>
</div>