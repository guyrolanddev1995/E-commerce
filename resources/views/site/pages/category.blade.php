@extends('layouts.app')

@section('content')
@include('site.partials.header')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        @if($category->niveau == 1)
                            <li><a href="{{ route('site.home') }}">Accuel</a></li>
                            <li>{{ $category->name }}</li>
                        @endif

                        @if($category->niveau == 2)
                            <li><a href="{{ route('site.home') }}">Accuel</a></li>
                            <li><a href="{{ route('site.category.show', $category->parent->slug) }}">{{ $category->parent->name }}</a></li>
                            <li>{{ $category->name }}</li>
                        @endif

                        @if($category->niveau == 3)
                            <li><a href="{{ route('site.home') }}">Accuel</a></li>
                            <li><a href="{{ route('site.category.show', $category->parent->parent->slug) }}">{{ $category->parent->parent->name }}</a></li>
                            <li><a href="{{ route('site.category.show', $category->parent->slug) }}">{{ $category->parent->name }}</a></li>
                            <li>{{ $category->name }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <div class="shop-tab nav d-flex">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="fa fa-list"></i>
                        </a>
                        <p>{{ count($products) }} Produits trouvés</p>
                    </div>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex">
                        <div class="shot-product">
                            <p>Trier par:</p>
                        </div>
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35">
                    <!-- Shop Tab Content Start -->
                    <div class="tab-content jump">
                        <!-- Tab One Start -->
                        <div id="shop-1" class="tab-pane active">
                            <div class="row responsive-md-class responsive-xl-class responsive-lg-class">
                                @foreach ($products as $product)
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <product-component :product="{{ $product }}"></product-component>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Tab One End -->
                        <!-- Tab Two Start -->
                        <div id="shop-2" class="tab-pane">
                            @foreach ($products as $product)
                                <product-grid :product="{{ $product }}"></product-grid>
                            @endforeach
                        </div>
                        <!-- Tab Two End -->
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mb-60px mt-30px">
                        <ul>
                            <li>
                                <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
          @include('site.partials.product_sidebar', ['category' => $category])
        </div>
    </div>
</div>
@endsection