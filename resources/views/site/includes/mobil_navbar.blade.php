<div class="mobile-category-nav d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!--=======  category menu  =======-->
                <div class="hero-side-category">
                    <!-- Category Toggle Wrap -->
                    <div class="category-toggle-wrap">
                        <!-- Category Toggle -->
                        <button class="category-toggle"><i class="fa fa-bars"></i> Categories</button>
                    </div>

                    <!-- Category Menu -->
                    <nav class="category-menu">
                        <ul>
                            @foreach ($categories as $key => $category)
                            <li class="menu-item-has-children menu-item-has-children-{{ $key + 1 }}">
                                <a href="#">{{ $category->name }}<i class="ion-ios-arrow-down"></i></a>
                                @if(count($category->children) > 0)
                                    <ul class="category-mega-menu category-mega-menu-{{ $key + 1 }}">
                                        @foreach($category->children as $child)
                                            <li><a href="{{ route('site.category.show', $child->slug) }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!--=======  End of category menu =======-->
            </div>
        </div>
    </div>
</div>