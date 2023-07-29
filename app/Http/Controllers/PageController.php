<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;
use App\Models\Kategori;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    //manageproduct_page
    public function addcategory()
    {
        $kategoriler = Kategori::get()->all();
        return view('back.addcategory',compact('kategoriler'));
    }
    public function addproduct()
    {
        $kategoriler = Kategori::get()->all();
        return view('back.addproduct',compact('kategoriler'));
    }
    //end manageproduct_page
    //manageproduct_page 
    public function manageproduct_page()
    {
        $kategoriler = Urun::get()->all();
        $data = Urun::get()->all();
        return view('back.manageproduct',compact('data','kategoriler'));
    }
    //end manageproduct_page 
    public function editproduct($slug)
    {
        $item = Urun::whereSlug($slug)->first();
        $cate = Kategori::get()->all();
        return view('back.editproduct',compact('item','cate'));
    }

    public function editcategory($slug)
    {
        $item = Kategori::whereSlug($slug)->first();
        return view('back.editcategory',compact('item'));
    }

    public function managecategory()
    {
        $kategoriler = Kategori::get()->all();
        return view('back.managecategory',compact('kategoriler'));
    }

    public function home(){
        $product = Urun::get()->all();
        $cate = Kategori::get()->all();
        return view("front.home", compact('product','cate'));
    }
}
