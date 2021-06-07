<header class="header-wrapper">
    <!-- Header Nav Start -->
    @include('site.includes.topbar')
    <!-- Header Nav End -->
    @include('site.includes.navbar',  ['isSticky' => false])
    <!-- Header Nav End -->
    <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 custom-col-2">
                    <div class="header-menu-vertical">
                        <h4 class="menu-title">Les Catégories</h4>
                        <ul class="menu-content display-block">
                            @foreach($categories as $categorie)
                            <li class="menu-item">
                                <a href="{{ route('site.category.show', $categorie->slug) }}">{{ $categorie->name }} @if(count($categorie->children) > 0) <i class="ion-ios-arrow-right"></i> @endif</a>
                                @if(count($categorie->children) > 0)
                                <ul class="sub-menu flex-wrap">
                                    @foreach($categorie->children as $sub_cat)
                                        <li>
                                            <a href="{{ route('site.category.show', $sub_cat->slug) }}">
                                                <span> <strong>{{ $sub_cat->name }}</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                @if(count($sub_cat->children) > 0)
                                                    @foreach($sub_cat->children as $child)
                                                        <li><a href="{{ route('site.category.show', $child->slug) }}">{{ $child->name }}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
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
                <div class="col-lg-9 custom-col-2">
                    <!-- header horizontal menu -->
                    <div class="intro-text-shipping text-right">
                        <div class="free-ship">Free Shipping on Orders $50+</div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- header menu -->
</header>