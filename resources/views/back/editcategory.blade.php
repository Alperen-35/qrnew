@extends('back.layouts.master')
@section('content')
<!-- Content Body Start -->
<div class="content-body">
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3><a href="{{route('managecategory')}}">Kategori Listesi</a><span>/ Kategori Düzenleme </span></h3>
            </div>
        </div><!-- Page Heading End -->
        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-date-range">
                <div id="tarihGoster" class="form-control"></div>
            </div>
        </div><!-- Page Button Group End -->
    </div><!-- Page Headings End -->
    <!-- Add or Edit Product Start -->
    <div class="add-edit-product-wrap col-12">
        <div class="add-edit-product-form">
            <form action="{{route('editcategoryPost',$item->id) }}" method="POST"> 
                @csrf
                <input type="text" hidden value="{{ $item->id }}" name="id">
                <h4 class="title">Ürün İsmi</h4>
                <div class="row">
                    <div class="col-12 mb-30"><input name="name" value="{{ $item->name }}" class="form-control" type="text"></div>
                </div>
                <!-- Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <button type="submit" class="button button-outline button-info mb-10 ml-10 mr-0 submit">Kaydet</button>
                        <button type="button" class="button button-outline button-danger mb-10 ml-10 mr-0 delete" data-id={{route('categoryDelete',$item->id) }}>Kategoriyi Sil</button>
                    </div>
                </div><!-- Button Group End -->
            </form>
        </div>
        <script>
            $('.delete').click(function() {
                var url = $(this).attr('data-id');
                Swal.fire({
                    title: 'Kategori Silinsinmi?'
                    , showCancelButton: true
                    , confirmButtonText: 'Sil'
                    , confirmButtonColor: 'Red'
                , }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
            });
        </script>
    </div><!-- Add or Edit Product End -->
</div>
@endsection
