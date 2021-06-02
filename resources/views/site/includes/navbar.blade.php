<div class="header-menu  d-xl-block d-none bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 custom-col-3">
                <div class="header-menu-vertical bg-blue">
                    <h4 class="menu-title be-af-none">Toutes les catégories</h4>
                    <ul class="menu-content display-block">
                        @foreach ($categories as $categorie)
                        <li class="menu-item">
                            <a href="#">{{ $categorie->name }} @if(count($categorie->children) > 0)<i class="ion-ios-arrow-right"></i>@endif</a>
                            @if(count($categorie->children) > 0)
                            <ul class="sub-menu flex-wrap">
                                @foreach ($categorie->children as $child)
                                <li>
                                    <a href="#">
                                        <span> <strong> {{ $child->name }}</strong></span>
                                    </a>
                                   @if(count($child->children) > 0)
                                    <ul class="submenu-item">
                                        @foreach ($child->children as $item)
                                            <li><a href="#">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                   @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    <!-- menu content -->
                </div>
                <!-- header menu vertical -->
            </div>
            
            @include('site.includes.banner')
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <!-- Static Area Start -->
    <div class="static-area  ptb-40px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{ asset('assets/images/icons/static-icons-1.png') }}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Shipping</h4>
                                <p>On all orders over $75.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{ asset('assets/images/icons/static-icons-2.png') }}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Returns</h4>
                                <p>Returns are free within 9 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="{{ asset('assets/images/icons/static-icons-4.png') }}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="{{ asset('assets/images/icons/static-icons-3.png') }}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
</div>