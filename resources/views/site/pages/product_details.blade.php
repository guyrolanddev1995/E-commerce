{{-- @extends('layouts.app')

@section('content')
<div class="main-content main-content-details single right-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-trail breadcrumbs">
					<ul class="trail-items breadcrumb">
						<li class="trail-item trail-begin">
							<a href="{{ route('site.home') }}">Accueil</a>
						</li>
						<li class="trail-item trail-end active">
							{{ $product->name}}
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="content-area content-details col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<div class="site-main">
					<div class="details-product">
						<div class="details-thumd">
							<div class="image-preview-container image-thick-box image_preview_container">
								<img id="img_zoom" data-zoom-image="{{asset('storage/'.$product->product_image)}}" src="{{asset('storage/'.$product->product_image)}}" alt="img" width="100%">
								<a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							@if($images->count() > 0)
								<div class="product-preview image-small product_preview">
									<div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
										@foreach($images as $image)
											<a href="#" data-image="{{asset('storage/'.$image->full)}}" data-zoom-image="{{asset('storage/'.$image->full)}}" class="active">
												<img src="{{asset('storage/'.$image->full)}}" data-large-image="{{asset('storage/'.$image->full)}}" alt="img">
											</a>
										@endforeach
									</div>
								</div>
							@endif
							
						</div>
						<div class="details-infor">
							<h1 class="product-title">
								{{ $product->name }}
							</h1>
							<div class="stars-rating">
								<div class="star-rating">
									<span class="star-5"></span>
								</div>
								<div class="count-star">
									(7)
								</div>
							</div>
							<div class="price">
								<span>{{ $product->price }} CFA</span>
							</div>
							<div class="availability">
								<strong>Disponibilité</strong>:
								@if($product->quantity > $product->stock)  
									<b style="color:green">En stock</b>
								@else
									<b style="color:red">Stock épuisé</i>
								@endif
								
							</div>
							<div class="availability">
								<strong>Référence</strong>:
								{{ $product->sku }}
							</div>
							
							@if($product->brand()->exists())
								<div class="availability">
									<strong>Marque</strong>:
									{{ $product->brand->name }}
								</div>
							@endif
							
							<div class="product-details-description">
								<div>{!! $product->caracteristique  !!}</div>
							</div>
							
							<div class="group-button mt-5">
								<form action="{{ route('product.add.cart') }}" method="POST" role="form">
									@csrf
									<div class="quantity-add-to-cart">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" data-max="{{ $product->quantity }}" name="qty" value="1" title="Qty" class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
											<input type="hidden" name="productId" value="{{ $product->id }}">
											<input type="hidden" name="image" value="{{ $product->product_image }}">
											<input type="hidden" name="price" id="finalPrice" value="{{ $product->sale_price != null ? $product->sale_price : $product->price }}">
										</div>
										@if($product->quantity > $product->stock)
											<button class="single_add_to_cart_button button">Ajouter au panier</button>
										@endif
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-details-product">
						<ul class="tab-link">
							<li class="active">
								<a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
							</li>
							<li class="">
								<a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
							</li>
						</ul>
						<div class="tab-container">
							<div id="product-descriptions" class="tab-panel active">
								{!! $product->description !!}
							</div>
							<div id="information" class="tab-panel">
								{!! $product->caracteristique !!}
							</div>
						</div>
					</div>
					<div style="clear: left;"></div>
					<div class="related products product-grid">
						<h2 class="product-grid-title">VOUS POURRIEZ AUSSI AIMER</h2>
						<div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
							@foreach ($other_products as $other)
								<div class="product-item style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="{{ route('product.details', $other->slug)}}">
													<img src="{{asset('storage/'.$other->product_image)}}" alt="img">
												</a>
												<div class="thumb-group">
													<div class="yith-wcwl-add-to-wishlist">
														<div class="yith-wcwl-add-button">
															<a href="#">Add to Wishlist</a>
														</div>
													</div>
													<div class="loop-form-add-to-cart">
														<button class="single_add_to_cart_button button">Add to cart
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="{{ route('product.details', $other->slug)}}">{{ $other->name }}</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<ins>
														{{ $other->price }} CFA
													</ins>
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<div class="wrapper-sidebar">
					<div class="widget widget-categories">
						<h3 class="widgettitle">Categories</h3>
						<ul class="list-categories">
							<li>
								<input type="checkbox" id="cb1">
								<label for="cb1" class="label-text">
									New Arrivals
								</label>
							</li>
							<li>
								<input type="checkbox" id="cb2">
								<label for="cb2" class="label-text">
									Dining
								</label>
							</li>
							<li>
								<input type="checkbox" id="cb3">
								<label for="cb3" class="label-text">
									Desks
								</label>
							</li>
							<li>
								<input type="checkbox" id="cb4">
								<label for="cb4" class="label-text">
									Accents
								</label>
							</li>
							<li>
								<input type="checkbox" id="cb5">
								<label for="cb5" class="label-text">
									Accessories
								</label>
							</li>
							<li>
								<input type="checkbox" id="cb6">
								<label for="cb6" class="label-text">
									Tables
								</label>
							</li>
						</ul>
					</div>
					<div class="widget widget-related-products">
						<h3 class="widgettitle">Related Products</h3>
						<div class="slider-related-products owl-slick nav-top-right equal-container"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1 }},{"breakpoint":"992","settings":{"slidesToShow":2}}]'>
							<div class="product-item style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-1.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Glorious Eau</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-item style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-2.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Bibliotheque</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget widget-testimonials">
						<h3 class="widgettitle">Testimonials</h3>
						<div class="slider-related-products owl-slick nav-top-right"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"991","settings":{"slidesToShow":1 }}]'>
							<div class="testimonials-item">
								<div class="Testimonial-inner">
									<div class="comment">
										Donec ligula mauris, posuere sed tincidunt a, facilisis id enim. Class aptent taciti sociosqu ad litora torquent per conubia.
									</div>
									<div class="author">
										<div class="avt">
											<img src="assets/images/member1.png" alt="img">
										</div>
										<h3 class="name">
											Adam Smith
											<span class="position">
													CEO/Founder Apple
												</span>
										</h3>

									</div>
								</div>
							</div>
							<div class="testimonials-item">
								<div class="Testimonial-inner">
									<div class="comment">
										Donec ligula mauris, posuere sed tincidunt a, facilisis id enim. Class aptent taciti sociosqu ad litora torquent per conubia.
									</div>
									<div class="author">
										<div class="avt">
											<img src="assets/images/member2.png" alt="img">
										</div>
										<h3 class="name">
											Tom Milikin
											<span class="position">
													CEO/Founder Apple
												</span>
										</h3>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

{{-- <div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="breadcrumb-trail breadcrumbs">
				<ul class="trail-items breadcrumb">
					<li class="trail-item trail-begin">
						<a href="{{ route('site.home') }}">Accueil</a>
					</li>
					<li class="trail-item trail-end active">
						{{ $product->name}}
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="content-area content-details col-lg-9 col-md-8 col-sm-12 col-xs-12">
			<div class="site-main">
				<div class="details-product">
					<div class="details-thumd">
						<div class="image-preview-container image-thick-box image_preview_container">
							<img id="img_zoom" data-zoom-image="{{asset('storage/'.$product->product_image)}}" src="{{asset('storage/'.$product->product_image)}}" alt="img">
							<a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						@if($images->count() > 0)
							<div class="product-preview image-small product_preview">
								<div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
									@foreach($images as $image)
										<a href="#" data-image="{{asset('storage/'.$image->full)}}" data-zoom-image="{{asset('storage/'.$image->full)}}" class="active">
											<img src="{{asset('storage/'.$image->full)}}" data-large-image="{{asset('storage/'.$image->full)}}" alt="img">
										</a>
									@endforeach
								</div>
							</div>
						@endif
						
					</div>
					<div class="details-infor">
						<h1 class="product-title">
							{{ $product->name }}
						</h1>
						<div class="stars-rating">
							<div class="star-rating">
								<span class="star-5"></span>
							</div>
							<div class="count-star">
								(7)
							</div>
						</div>
						<div class="price">
							<span>{{ $product->price }} CFA</span>
						</div>
						<div class="availability">
							<strong>Disponibilité</strong>:
							@if($product->quantity > $product->stock)  
								<b style="color:green">En stock</b>
							@else
								<b style="color:red">Stock épuisé</i>
							@endif
							
						</div>

						<div class="availability">
								<strong>Référence</strong>:
								{{ $product->sku }}
						</div>
						
						@if($product->brand()->exists())
						   <div class="availability">
								<strong>Marque</strong>:
								{{ $product->brand->name }}
							</div>
						@endif
						
						<div class="product-details-description">
							 {!! Str::limit($product->caracteristique, 250, '...')  !!}
						</div>
						
						<div class="group-button">
							<div class="yith-wcwl-add-to-wishlist">
								<div class="yith-wcwl-add-button">
									<a href="#">Add to Wishlist</a>
								</div>
							</div>
							<div class="size-chart-wrapp">
								<div class="btn-size-chart">
									<a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox">View Size Chart</a>
								</div>
							</div>
							<form action="{{ route('product.add.cart') }}" method="POST" role="form">
								@csrf
								<div class="quantity-add-to-cart">
									<div class="quantity">
										<div class="control">
											<a class="btn-number qtyminus quantity-minus" href="#">-</a>
											<input type="text" data-step="1" data-min="0" data-max="{{ $product->quantity }}" name="qty" value="1" title="Qty" class="input-qty qty" size="4">
											<a href="#" class="btn-number qtyplus quantity-plus">+</a>
										</div>
										<input type="hidden" name="productId" value="{{ $product->id }}">
										<input type="hidden" name="image" value="{{ $product->product_image }}">
										<input type="hidden" name="price" id="finalPrice" value="{{ $product->sale_price != null ? $product->sale_price : $product->price }}">
									</div>
									@if($product->quantity > $product->stock)
										<button class="single_add_to_cart_button button">Ajouter au panier</button>
									@endif
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-details-product">
					<ul class="tab-link">
						<li class="active">
							<a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
						</li>
						<li class="">
							<a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
						</li>
						<li class="">
							<a data-toggle="tab" aria-expanded="true" href="#reviews">Reviews</a>
						</li>
					</ul>
					<div class="tab-container">
						<div id="product-descriptions" class="tab-panel active">
							{!! $product->caracteristique !!}
						</div>
						<div id="information" class="tab-panel">
							{!! $product->description !!}
						</div>
						<div id="reviews" class="tab-panel">
							<div class="reviews-tab">
								<div class="comments">
									<h2 class="reviews-title">
										1 review for
										<span>Glorious Eau</span>
									</h2>
									<ol class="commentlist">
										<li class="conment">
											<div class="conment-container">
												<a href="#" class="avatar">
													<img src="assets/images/avartar.png" alt="img">
												</a>
												<div class="comment-text">
													<div class="stars-rating">
														<div class="star-rating">
															<span class="star-5"></span>
														</div>
														<div class="count-star">
															(1)
														</div>
													</div>
													<p class="meta">
														<strong class="author">Cobus Bester</strong>
														<span>-</span>
														<span class="time">June 7, 2013</span>
													</p>
													<div class="description">
														<p>Simple and effective design. One of my favorites.</p>
													</div>
												</div>
											</div>
										</li>
									</ol>
								</div>
								<div class="review_form_wrapper">
									<div class="review_form">
										<div class="comment-respond">
											<span class="comment-reply-title">Add a review </span>
											<form class="comment-form-review">
												<p class="comment-notes">
													<span class="email-notes">Your email address will not be published.</span>
													Required fields are marked
													<span class="required">*</span>
												</p>
												<div class="comment-form-rating">
													<label>Your rating</label>
													<p class="stars">
															<span>
																<a class="star-1" href="#"></a>
																<a class="star-2" href="#"></a>
																<a class="star-3" href="#"></a>
																<a class="star-4" href="#"></a>
																<a class="star-5" href="#"></a>
															</span>
													</p>
												</div>
												<p class="comment-form-comment">
													<label>
														Your review
														<span class="required">*</span>
													</label>
													<textarea title="review" id="comment" name="comment" cols="45" rows="8"></textarea>
												</p>
												<p class="comment-form-author">
													<label>
														Name
														<span class="">*</span>
													</label>
													<input title="author" id="author" name="author" type="text" value="">
												</p>
												<p class="comment-form-email">
													<label>
														Email
														<span class="">*</span>
													</label>
													<input title="email" id="email" name="email" type="email" value="" >
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class="submit" value="Submit">
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="clear: left;"></div>
				<div class="related products product-grid">
					<h2 class="product-grid-title">VOUS POURRIEZ AUSSI AIMER</h2>
					<div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
						@foreach ($other_products as $other)
							<div class="product-item style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="{{ route('product.details', $other->slug)}}">
												<img src="{{asset('storage/'.$other->product_image)}}" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="{{ route('product.details', $other->slug)}}">{{ $other->name }}</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<ins>
													{{ $other->price }} CFA
												</ins>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">
			<div class="wrapper-sidebar">
				<div class="widget widget-related-products">
					<h3 class="widgettitle"> Récommandés</h3>
					<div class="slider-related-products owl-slick nav-top-right equal-container"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1 }},{"breakpoint":"992","settings":{"slidesToShow":2}}]'>
						@foreach ($recommanded as $p)
							<div class="product-item style-1">
								<div class="product-inner equal-element">
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="{{ route('product.details', $p->slug)}}">
												<img src="{{ asset('storage/'.$p->product_image)}}" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="{{ route('product.details', $p->slug)}}">{{ $p->name}}</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<ins>
													{{ $p->price }} CFA
												</ins>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div> --}}

@extends('layouts.app')

@section('content')
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-content">
					<ul class="nav">
						<li><a href="index.html">Accueil</a></li>
						<li><a href="index.html">Marque</a></li>
						<li><a href="index.html">Iphone</a></li>
						<li>Single Product Tab 2</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="product-details-area mtb-60px">
	<div class="container">
		<div class="row">
			{{-- <div class="col-xl-6 col-lg-6 col-md-12">
				<div class="product-details-img product-details-tab product-details-tab-2">
					<div id="gallery" class="product-dec-slider-3 swiper-container">
						<div class="swiper-wrapper">
							
							@foreach ($images as $image)
								<div class="swiper-slide">
									<a data-image="{{ asset('storage/products/galleries/300x300/'.$image->full) }}" data-zoom-image="{{ asset('storage/products/galleries/800x800/'.$image->full)}}">
										<img class="img-responsive" src="{{ asset('storage/products/galleries/300x300/'.$image->full) }}" alt="" />
									</a>
								</div>
							@endforeach
						</div>
					</div>
					<div class="zoompro-wrap zoompro-2">
						<div class="zoompro-border zoompro-span">
							<img class="zoompro" src="{{ asset('storage/products/300x300/'.$product->product_image) }}" data-zoom-image="{{ asset('storage/products/800x800/'.$product->product_image)}}" alt="" />
						</div>
					</div>
				</div>
			</div> --}}
			<div class="col-xl-6 col-lg-6 col-md-12">
				<div class="product-details-img product-details-tab">
					<div class="zoompro-wrap zoompro-2">
						<div class="zoompro-border zoompro-span">
							<img class="zoompro" src="{{ asset('storage/products/300x300/'.$product->product_image) }}" data-zoom-image="{{ asset('storage/products/800x800/'.$product->product_image)}}" alt="" />
						</div>
					</div>
					<div id="gallery" class="product-dec-slider-2 swiper-container">
						<div class="swiper-wrapper">
							@foreach ($images as $image)
								<div class="swiper-slide">
									<a data-image="{{ asset('storage/products/galleries/300x300/'.$image->full) }}" data-zoom-image="{{ asset('storage/products/galleries/800x800/'.$image->full)}}">
										<img class="img-responsive" src="{{ asset('storage/products/galleries/300x300/'.$image->full) }}" alt="" />
									</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12">
				<div class="product-details-content">
					<h2>{{ $product->name }}</h2>
					<p class="reference">Reference:<span> {{ $product->sku }}</span></p>
					<div class="pricing-meta">
						<ul>
							<li class="old-price not-cut">{{ $product->price }} CFA</li>
						</ul>
					</div>
					<div class="pro-details-list">
						{!! $product->details !!}
					</div>
					<div class="pro-details-quality mt-0px">
						<div class="cart-plus-minus">
							<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
						</div>
						<div class="pro-details-cart btn-hover">
							<a href="#">  Ajouter au panier</a>
						</div>
					</div>
					<div class="pro-details-policy">
						<ul>
							<li><img src="{{ asset('assets/images/icons/policy.png') }}" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
							<li><img src="{{ asset('assets/images/icons/policy-2.png') }}" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
							<li><img src="{{ asset('assets/images/icons/policy-3.png') }}" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="description-review-area mb-60px">
	<div class="container">
		<div class="description-review-wrapper">
			<div class="description-review-topbar nav">
				<a data-toggle="tab" href="#des-details1">Description</a>
				<a class="active" data-toggle="tab" href="#des-details2">Product Details</a>
				<a data-toggle="tab" href="#des-details3">Reviews (2)</a>
			</div>
			<div class="tab-content description-review-bottom">
				<div id="des-details2" class="tab-pane active">
					<div class="product-anotherinfo-wrapper">
						<ul>
							<li><span>Weight</span> 400 g</li>
							<li><span>Dimensions</span>10 x 10 x 15 cm</li>
							<li><span>Materials</span> 60% cotton, 40% polyester</li>
							<li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
						</ul>
					</div>
				</div>
				<div id="des-details1" class="tab-pane">
					<div class="product-description-wrapper">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
						<p>
							ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						</p>
					</div>
				</div>
				<div id="des-details3" class="tab-pane">
					<div class="row">
						<div class="col-lg-7">
							<div class="review-wrapper">
								<div class="single-review">
									<div class="review-img">
										<img src="assets/images/review-image/1.png" alt="" />
									</div>
									<div class="review-content">
										<div class="review-top-wrap">
											<div class="review-left">
												<div class="review-name">
													<h4>White Lewis</h4>
												</div>
												<div class="rating-product">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
												</div>
											</div>
											<div class="review-left">
												<a href="#">Reply</a>
											</div>
										</div>
										<div class="review-bottom">
											<p>
												Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
											</p>
										</div>
									</div>
								</div>
								<div class="single-review child-review">
									<div class="review-img">
										<img src="assets/images/review-image/2.png" alt="" />
									</div>
									<div class="review-content">
										<div class="review-top-wrap">
											<div class="review-left">
												<div class="review-name">
													<h4>White Lewis</h4>
												</div>
												<div class="rating-product">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
												</div>
											</div>
											<div class="review-left">
												<a href="#">Reply</a>
											</div>
										</div>
										<div class="review-bottom">
											<p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="ratting-form-wrapper pl-50">
								<h3>Add a Review</h3>
								<div class="ratting-form">
									<form action="#">
										<div class="star-box">
											<span>Your rating:</span>
											<div class="rating-product">
												<i class="ion-android-star"></i>
												<i class="ion-android-star"></i>
												<i class="ion-android-star"></i>
												<i class="ion-android-star"></i>
												<i class="ion-android-star"></i>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="rating-form-style mb-10">
													<input placeholder="Name" type="text" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="rating-form-style mb-10">
													<input placeholder="Email" type="email" />
												</div>
											</div>
											<div class="col-md-12">
												<div class="rating-form-style form-submit">
													<textarea name="Your Review" placeholder="Message"></textarea>
													<input type="submit" value="Submit" />
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection