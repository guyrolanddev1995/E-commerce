<div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img class="img-responsive" src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo.jpg" /></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <cart-header></cart-header>
                </div>
            </div>
            <!-- Header Tools End -->
        </div>
    </div>
</div>
<div class="mobile-search-area d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-element media-body">
                    <form class="d-flex" action="#">
                        <div class="search-category">
                            <select>
                                <option value="0">Catégories</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @if(count($category->children) > 0)
                                        @foreach ($category->children as $child)
                                            <option value="{{ $child->id }}">- - {{ $child->name }}</option>
                                            @if(count($child->children) > 0)
                                                @foreach ($child->children as $sub_cat)
                                                    <option value="{{ $sub_cat->id }}">- - - - {{ $sub_cat->name }}</option>
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
            </div>
        </div>
    </div>
</div>

@include('site.includes.mobil_navbar', ['categories' => $categories])


