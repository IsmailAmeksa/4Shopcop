@extends('layouts.app')

@section('content')

<div class="categories">
	<h3>Categories</h3>
	<ul>
		@foreach($categories as $category)
		<li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
		@endforeach
	</ul>
</div>

<div class="products">
	@foreach($products as $product)
	<a class="product-row no-link" href="{{ route('products.show', $product) }}">
		<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
		<div class="product-body">
			<div>
				<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->discountedPrice }}</em></h5>
				@if($product->discount > 0)
				<p class="color-red">Nu <strong>{{ $product->discount }}% </strong>Korting:</p>
				<p class="color-red">Van: <del>&euro;{{ $product->price }}</del></p>
				@endif
				@unless(empty($product->description))
				<p>{{ $product->description  }}</p>
				@endunless
			</div>
			<button class="btn btn-primary">Meer info &amp; bestellen</button>
		</div>
	</a>
	@endforeach
</div>

@endsection