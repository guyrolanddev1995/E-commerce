@extends('layouts.app')

@section('content')
<div class="site-content">
    <main class="site-main  main-container no-sidebar">
        <div class="container">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <a href="{{ route('site.home')}}">
								<span>
									Accueil
								</span>
                        </a>
                    </li>
                    <li class="trail-item trail-end active">
							<span>
								Mon panier
							</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="main-content-cart main-content col-sm-12">
                    <h3 class="custom_blog_title">
                        Mon panier
                    </h3>
                    <div class="page-main-content">
                        @if(!\Cart::isEmpty())
                        <div class="shoppingcart-content">
                            <form action="shoppingcart.html" class="cart-form">
                                <table class="shop_table">
                                    <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"></th>
                                        <th class="product-price"></th>
                                        <th class="product-quantity"></th>
                                        <th class="product-subtotal"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Cart::getContent() as $item)
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="{{ route('checkout.cart.remove', $item->id) }}" class="remove"></a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{ asset('storage/'.$item->attributes['image']) }}" alt="img"
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="#" class="title">{{ $item->name }}</a>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <div class="control">
                                                        <input disable type="text" data-id="{{ $item->id }}" data-step="1" data-min="0" value="{{ $item->quantity}}" title="Qty"
                                                            class="input-qty qty" size="4">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount">
                                                    {{ $item->price }}
                                                    <span class="woocommerce-Price-currencySymbol">
                                                             CFA
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    <tr>
                                        <td class="actions">
                                           
                                            <div class="order-total">
														<span class="title">
															Prix Total:
														</span>
                                                <span class="total-price">
															{{ \Cart::getSubTotal() }} CFA
														</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="control-cart">
                                <a href="{{ route('site.home') }}" class="button btn-continue-shopping">
                                   Continuer vos achats
                                </a>
                                <a href="{{ route('check-out') }}" class="button btn-cart-to-checkout">
                                    Payer
                                </a>
                            </div>
                        </div>
                        @else
                         <div class="text-center">
                            <h1>Votre panier est vide</h1>
                            <a href="{{ route('site.home') }}" class="text-blue-700 mt-6 block">Cliquer ici pour faire vos magazins</a>
                         </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('scripts')
<script>
   (function(){
       const classname = document.querySelectorAll('.qty')
    
       Array.from(classname).forEach(element => {
           element.addEventListener('change', () => {
              let id = element.getAttribute('data-id')
              axios.patch(`/cart/${id}/update`, {
                  quantity: element.value
              })
              .then(response => {
                  window.location.href = "{{ route('checkout.cart') }}"
              })
              .catch(error => {
                console.log(error.response.data)
                window.location.href = "{{ route('checkout.cart') }}"
              })
           })
       });
   })()
</script>
@endsection