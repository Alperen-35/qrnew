@extends('back.layouts.master')
@section('content')
        <!-- Content Body Start -->
        <div class="content-body">
            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3><a href="{{route('yonetim')}}">Yönetim</a><span>/ Anasayfa</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <div id="tarihGoster" class="form-control"></div>                          
                    </div>
                </div><!-- Page Button Group End -->
            </div><!-- Page Headings End -->
            <!-- To Do List Start -->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h4 class="title">Garson Bekleyenler</h4>
                    </div>
                    <div class="box-body p-0">
                        <!--Todo List Start-->
                        <ul class="todo-list">
                            <!--Todo Item Start-->
                            <li>
                                <div class="list-content" style="margin-left: 26px;">
                                    <p>Örnek Masa.</p>
                                </div>
                                <div class="list-action">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->
                        </ul>
                        <!--Todo List End-->
                    </div>
                </div>
            </div><!-- To Do List End -->
        </div>
@endsection
