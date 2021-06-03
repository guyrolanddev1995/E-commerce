<div class="header-menu header-menu-3 bg-white sticky-nav d-xl-block d-none padding-0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 custom-col-2">
                <div class="header-menu-vertical">
                    <h4 class="menu-title">Les catégories</h4>
                    <ul class="menu-content display-none">
                        @foreach($categories as $categorie)
                            <li class="menu-item">
                                <a href="#">{{ $categorie->name }} @if(count($categorie->children) > 0) <i class="ion-ios-arrow-right"></i> @endif</a>
                                @if(count($categorie->children) > 0)
                                <ul class="sub-menu flex-wrap">
                                    @foreach($categorie->children as $sub_cat)
                                        <li>
                                            <a href="#">
                                                <span> <strong>{{ $sub_cat->name }}</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                @if(count($sub_cat->children) > 0)
                                                    @foreach($sub_cat->children as $child)
                                                        <li><a href="#">{{ $child->name }}</a></li>
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
                <div class="header-horizontal-menu">
                    <ul class="menu-content">
                        <li><a href="contact.html">Accueil</a></li>
                    </ul>
                </div>
                <!-- header horizontal menu -->
                
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>