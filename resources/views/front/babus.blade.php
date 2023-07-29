@extends('front.layouts.master')
@section('content')
<div class="row">
	<div class="col-md-11" style="float: right">
		<a style="float: right; width:300px" class="button button-outline button-info siparis text-center">Garson Çağır</a>
	</div>
</div>

<!-- product -->
<div class="product" id="menus">
	<div class="container">
		<h2>Yiyecek ve İçecekler<br>Listesi</h2>
		<div class="box-content">
			<div class="product-filter-menu">
				<ul>
					<li data-filter="all" class="active">
						<span>Hepsini Göster</span>
					</li>
					@foreach ($cate as $item)
					<li data-filter="{{ $item->id }}" class="active">
						<span>{{ $item->name }}</span>
					</li>
					@endforeach

				</ul>
			</div>{{  }}{{  }}
	{{  }}
			<div class="row filtr-container">
				@foreach ($product as $urun)

				<div class="col-md-4 col-sm-12 col-xs-12 col-12 filtr-item" data-category="{{ $urun->getKate->id }}">
					<div class="content">
						<a class="product-popup">
							<img src=" {{  asset('dist/_upload')}}/{{  $urun->img}}" alt="">
						</a>
						<h4 style="margin-top:18px">{{$urun->name}} </h4>
						<span style="font-size: 22px; margin-top:20px">{{$urun->price}} ₺</span>
					</div>
				</div>
				@endforeach

			</div>
			<script>
            $('.siparis').click(function() {
                Swal.fire({
                    title: 'Garson çağrılsın mı'
					const { value: input } = await Swal.fire({
						input: 'text',
						inputPlaceholder: 'Masa Numaranızı Yazınız'
					})
                    , showCancelButton: true
                    , confirmButtonText: 'Sil'
                    , confirmButtonColor: 'Red'
                , }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
					if(input){
						var text1 = ${input}
						var url = "{{ route('siparisPost', "(input)")}}";
					}
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
            });

        </script>
		</div>
	</div>
</div>
<!-- end product -->
@endsection