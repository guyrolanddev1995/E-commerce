<header class="header-wrapper">
    <div class="header-top header-top-2 bg-blue ptb-30px d-xl-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="index.html"><img class="img-responsive" src="assets/images/logo/logo-2.jpg" alt="logo.jpg" /></a>
                    </div>
                </div>
                <div class="col-md-10 align-self-center">
                    <div class="header-right-element d-flex">
                        <div class="search-element media-body mr-120px">
                            <form class="d-flex" action="#">
                                <div class="search-category">
                                    <select>
                                        <option value="0">Catégories</option>
                                        @foreach($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @if(count($categorie->children) > 0)
                                                @foreach($categorie->children as $sub_cat)
                                                    <option value="{{ $sub_cat->id }}">- - {{ $sub_cat->name }}</option>

                                                    @if(count($sub_cat->children) > 0)
                                                        @foreach($sub_cat->children as $child)
                                                            <option value="{{ $child->id }}">- - - - {{ $child->name }}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" placeholder="Rechercher un produit ici ..." />
                                <button><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!--Cart info Start -->
                        <div class="header-tools tools-style-2 d-flex">
                            <div class="dropdown align-self-center">
                                <button class="color-white" type="button" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-user"></i></button>
    
                                <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-4">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Sign in</a></li>
                                </ul>
                            </div>
                            <div class="cart-info d-flex align-self-center">
                                <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>$20.00</span></a>
                            </div>
                        </div>
                    </div>
                    <!--Cart info End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    @include('site.includes.navbar')
    <!-- header menu -->
</header>