@extends('back.layouts.master')
@section('content')
<!-- Content Body Start -->
<div class="content-body">
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">
       <!-- Page Heading Start -->
       <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3><a href="{{route('yonetim')}}">Yönetim</a><span>/ Kategori Listesi</span></h3>
        </div>
    </div><!-- Page Heading End -->
    <!-- Page Button Group Start -->
         <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <a class="button all_delete button-outline button-danger mb-10 ml-10 mr-0" data-id="{{ route('categoryAllDelete') }}" type="button">Kategorilerin Tamamını Sil</a>
            </div>
        </div><!-- Page Button Group End -->
</div><!-- Page Headings End -->
    <div class="row">
        <!--Manage Product List Start-->
        <div class="col-md-8 offset-md-2">
            <div class="table-responsive">
                <table id="datatable" class="table table-vertical-middle">
                    <thead>
                        <tr>
                            <th class="text-center">Kategori Adı</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriler as $item)
                        <tr>
                            <td class="text-center">{{$item->name}}</td>
                            <td class="text-center">
                                <a href="{{route('editcategory',$item->slug)}}" class="button button-outline button-info mb-10 ml-10 mr-0">Düzenle</a>
                                <a class="button delete button-outline button-danger mb-10 ml-10 mr-0" data-id={{route('categoryDelete',$item->id)}}>Ürünü Sil</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--Manage Product List End-->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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
                    $('.all_delete').click(function() {
                        var url = $(this).attr('data-id');
                        Swal.fire({
                            title: 'Kategoriler Silinsinmi?'
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
@endsection
