<div class="header-top bg-white ptb-30px d-xl-block d-none {{ $isSticky ? 'sticky-nav' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex">
                <div class="logo">
                    <a href="index.html"><img class="img-responsive" src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo.jpg" /></a>
                </div>
            </div>
            <div class="col-md-10 align-self-center">
                <div class="header-right-element d-flex">
                    <div class="search-element media-body mr-120px">
                        <form class="d-flex" action="#">
                            <div class="search-category">
                                <select>
                                    <option value="0">Les Categories</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                        @if(count($categorie->children) > 0)
                                            @foreach($categorie->children as $child)
                                                <option value="{{ $child->id }}">- - {{ $child->name }}</option>
                                                @if(count($child->children) > 0)
                                                    @foreach ($child->children as $sub_child)
                                                        <option value="{{ $sub_child->id }}">- - - - {{ $sub_child->name }}</option>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" placeholder="Enter your search key ... " />
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <!--Cart info Start -->
                    <div class="header-tools d-flex">
                        <div class="dropdown align-self-center">
                            <button class="color-black" type="button" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-user"></i></button>
    
                            <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-4">
                                @if(Auth::check())
                                    <li><a href="my-account.html">Votre Compte</a></li>
                                    <li><a href="checkout.html">Vos Commandes</a></li>
                                    <li><a href="{{ route('logout') }}">Se Déconnecter</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                                    <li><a href="{{ route('register') }}">Créer un compte</a></li>
                                @endif
                            </ul>
                        </div>
                        <cart-header></cart-header>
                    </div>
                </div>
                <!--Cart info End -->
            </div>
        </div>
    </div>
</div>