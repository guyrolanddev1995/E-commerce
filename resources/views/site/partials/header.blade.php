<header class="header-wrapper">
    <!-- Header Nav Start -->
    @include('site.includes.topbar')
    <!-- Header Nav End -->
    <div class="header-top bg-white ptb-30px d-xl-block d-none sticky-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="mobile-menu-toggle home-2">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                    <div class="logo">
                        <a href="index.html"><img class="img-responsive" src="assets/images/logo/logo.jpg" alt="logo.jpg" /></a>
                    </div>
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="header-right-element d-flex">
                        <div class="search-element media-body mr-120px">
                            <form class="d-flex" action="#">
                                <div class="search-category">
                                    <select>
                                        <option value="0">Catégories</option>
                                        @foreach($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @if(count($categorie->children) > 0)
                                                @foreach ($categorie->children as $child)
                                                    <option value="{{ $child->id }}">- - {{ $child->name }}</option>
                                                    @if(count($child->children) > 0)
                                                        @foreach ($child->children as $item)
                                                            <option value="{{ $item->id }}">- - - - {{ $item->name }}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" placeholder="Rechercher un produit..." />
                                <button><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!--Cart info Start -->
                        <div class="header-tools d-flex">
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