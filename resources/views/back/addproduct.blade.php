@extends('back.layouts.master')
@section('content')
<div class="content-body">
    <div class="row justify-content-between align-items-center mb-10">
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3><a href="{{route('yonetim')}}">Yönetim</a><span>/ Ürün Ekleme</span></h3>
            </div>
        </div>
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-date-range">
                <div id="tarihGoster" class="form-control"></div>
            </div>
        </div>
    </div>
    <div class="add-edit-product-wrap col-12">
        <div class="add-edit-product-form">
            <form action="{{ route('productAdd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h4 class="title">Ürün İsmi</h4>
                <div class="row">
                    <div class="col-12 mb-30"><input name="product_name" class="form-control" type="text" placeholder="Ürün İsmini Giriniz." required></div>
                </div>
                <h4 class="title">Ürün Kategori</h4>
                <div class="col-12 mb-30">
                    <select name="product_category" class="form-control select2" required>
                        <option selected disabled>Seçiniz</option>
                        @foreach ($kategoriler as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                        @endforeach
                    </select>
                </div>
                <h4 class="title">Ürün Fiyat</h4>
                <div class="row">
                    <div class="col-12 mb-30"><input class="form-control" name="product_price" type="text" placeholder="Ürün Fiyatı Giriniz." required></div>
                </div>
                <h4 class="title">Ürün Açıklama</h4>
                <div class="row">
                    <div class="col-12 mb-30"><input class="form-control" name="product_description" type="text" placeholder="Ürün Açıklaması Giriniz." required></div>
                </div>
                <h4>Ürün Fotoğrafı</h4>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <input accept="image/png, image/gif, image/jpeg" type="file"id="input-file-now" class="dropify" name="img">
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Ekle</button>
                    </div>
                </div>
            </form>
            {{-- <script>
                $('button[type=submit]').click(function(){
                    $(this).hide();
                });
            </script> --}}
        </div>
    </div>
</div>
<script>

</script>
@endsection
