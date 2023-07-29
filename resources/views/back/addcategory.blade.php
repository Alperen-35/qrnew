@extends('back.layouts.master')
@section('content')
        <!-- Content Body Start -->
        <div class="content-body">
            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3><a href="{{route('yonetim')}}">Yönetim</a><span>/ Kategori Ekle</span></h3>
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
                    <form action="{{route('addcategoryPost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="title">Kategori İsmi</h4>
                        <div class="row">
                            <div class="col-12 mb-30"><input name="category_name" class="form-control" type="text" placeholder="Kategori İsmini Giriniz." required></div>
                        </div>
                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Ekle</button>
                            </div>
                        </div><!-- Button Group End -->
                    </form>
                </div>
            </div><!-- Add or Edit Product End -->
        </div>
        <script>
                $('button[type=submit]').click(function(){
                    $(this).hide();
                });
            </script>
@endsection
