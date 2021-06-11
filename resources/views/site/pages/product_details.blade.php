@extends('layouts.app')

@section('content')
@include('site.partials.header')
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

<product-detail :product="{{ $product }}" :images="{{ $images }}"></product-detail>


@endsection