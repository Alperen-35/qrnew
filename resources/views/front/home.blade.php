@extends('front.layouts.master')
@section('content')
	<!-- slider -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="front/img/home.jpg" alt="">
				<div class="caption slider-content center-align ">
					<div class="container">
						<h2>DN Kafe</h2>
						<h4>Bilgi...</h4>
						<a href="" class="button-default">Garson Çağır</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- end slider -->
	<!-- home shop -->
		<div class="shop-home section">
		<div class="container">
			<div class="row">
				@foreach ($product as $item)
					{{-- @if ($item->name == null)
						<style>
							.footer {
								bottom: 0px;
								left: 0px;
								width: 100%;
								height: 200px;
								padding: 15px;
							}
						</style>
					@else

					@endif --}}
					<div class="col-md-4 col-sm-12 col-xs-12 col-12 filtr-item" data-category="{{ $item->getKate->id }}">
					<div class="col s6" style="float:center">
							<div class="shop">
								<img style="max-width: 400px" src="{{asset('dist/_upload')}}/{{$item->img}}" alt="">
								<h6><a class="text-" href="">{{$item->name}}</a></h6>
								<div>
									<span style="float:center; font-size:20px">{{$item->price}}₺</span>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end home shop -->
@endsection



