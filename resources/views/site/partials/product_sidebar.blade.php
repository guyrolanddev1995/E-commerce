<div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
    <div class="shop-sidebar-wrap">
            <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">
                    <h3 class="sidebar-title">{{ Str::ucfirst($category->name) }}</h3>
                    <div class="accordion" id="accordionExample">
                        @if($category->niveau == 1)
                            @foreach($category->children as $key => $cat)
                            <div class="card">
                                <div class="card-header" id="heading{{ $key }}">
                                    <a href="{{ route('site.category.show', $cat->slug) }}" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}" class="collapsed">{{ $cat->name }}</a>
                                </div>

                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            @foreach($cat->children as $child)
                                                <li><a href="{{ route('site.category.show', $child->slug) }}">{{ $child->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                        @if($category->niveau == 2)
                            @foreach($category->parent->children as $key => $cat)
                            <div class="card">
                                <div class="card-header" id="heading{{ $key }}">
                                    <a href="{{ route('site.category.show', $cat->slug) }}" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}" class="collapsed">{{ $cat->name }}</a>
                                </div>

                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <ul class="category-list">
                                            @foreach($cat->children as $child)
                                                <li><a href="{{ route('site.category.show', $child->slug) }}">{{ $child->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                        @if($category->niveau == 3)
                            @foreach($category->parent->parent->children as $key => $cat)
                                <div class="card">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <a href="{{ route('site.category.show', $cat->slug) }}" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}" class="collapsed">{{ $cat->name }}</a>
                                    </div>

                                    <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <ul class="category-list">
                                                @foreach($cat->children as $child)
                                                    <li><a href="{{ route('site.category.show', $child->slug) }}">{{ $child->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            <!-- Sidebar single item -->
        </div>
    </div>
</div>