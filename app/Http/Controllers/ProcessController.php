<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;
use App\Models\Kategori;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class ProcessController extends Controller
{
    //productAllDelete
    public function productAllDelete()
    {
        $data = Urun::get()->all();
        foreach ($data as $item) {
            unlink('dist/_upload/'.$item->img);
            $item->delete();
        }
        return redirect()->back();
    }

    public function categoryAllDelete()
    {
        $data = Kategori::get()->all();
        foreach ($data as $item) {
            $item->delete();
        }
        toastr()->success('Tüm Kategoriler Silindi', 'Başarılı');
        return redirect()->back();
        
    }
    //end productAllDelete
    //add ğ-producr
    public function addproductPost(Request $request)
    {

            $urun = new Urun;
            $urun->name = $request->product_name;
            $urun->desc = $request->product_description;
            $urun->price = $request->product_price;
            $urun->slug = Str::slug($request->product_name);
            $kategoriler = $request->kategori;
            $urun->cate = $request->product_category;
            $name = uniqid();
            $fileEx = $request->img->extension();
            $type = $request->img->getClientMimeType();
            $new_name = $name . '.' . $fileEx; 
            $request->img->move('dist/_upload', $new_name);
            // Resmi kaydedin

            $urun->img = $new_name;
            $urun->save();
            toastr()->success('Ürününüz Eklendi', 'Başarılı');
            $item = Urun::whereId($urun->id)->first();
            return redirect()->route('editproduct',$urun->slug);
        
    }
    //end add ğ-product

    public function addcategoryPost(Request $request)
    {

            $kategori = new Kategori;
            $kategori->name = $request->category_name;
            $kategori->slug = Str::slug($request->category_name);

            $kategori->save();
            toastr()->success('Yeni Kategori Eklendi!', 'Başarılı');
            return redirect()->back();
        
    }
    public function urunDelete($id)
    {
        try {
            $urun=Urun::whereId($id)->first();
            $urun->delete();
            toastr()->success('Ürün Sepetinizden Çıkarıldı', 'Başarılı');

        } catch (\Exception $th) {
            toastr()->error('Beklenmedik Bir Hata Meydana Geldi', 'Hata');
        }
        return redirect()->back();
    }
    public function urunDelete2($id)
    {
        try {
            $urun=Urun::whereId($id)->first();
            $urun->delete();
            toastr()->success('Ürün Sepetinizden Çıkarıldı', 'Başarılı');
            $kategoriler = Urun::get()->all();
            $data = Urun::get()->all();
            return view('back.manageproduct',compact('data','kategoriler'));
        } catch (\Exception $th) {
            toastr()->error('Beklenmedik Bir Hata Meydana Geldi', 'Hata');
        }
    }
    public function urunDuzenle(Request $request){
        $id = $request->id;
        $urun = Urun::whereId($id)->first();
        $urun->name = $request->name;
        $urun->price = $request->price;
        $urun->desc = $request->desc;
        $urun->cate = $request->cate;
        if($request->hasFile('img'))
        {
            unlink('dist/_upload/'.$urun->img);
            $name = uniqid();
            $fileEx = $request->img->extension();
            $type = $request->img->getClientMimeType();
            $new_name = $name . '.' . $fileEx;
            $request->img->move('dist/_upload', $new_name);
            // Resmi kaydedin
            $urun->img = $new_name;
        }
        $urun->save();
        return redirect()->back();
    }
    public function categoryDelete($id)
    {
        try {
            $urun=Kategori::whereId($id)->first();
            $urun->delete();
            toastr()->success('Kategori Kaldırıldı', 'Başarılı');

        } catch (\Exception $th) {
            toastr()->error('Beklenmedik Bir Hata Meydana Geldi', 'Hata');
        }
        return redirect()->route('managecategory');
    }
    public function categoryDelete2($id)
    {
        try {
            $urun=Kategori::whereId($id)->first();
            $urun->delete();
            toastr()->success('Kategori Kaldırıldı', 'Başarılı');
            $kategoriler = Urun::get()->all();
            $data = Urun::get()->all();
            return view('managecategory',compact('data','kategoriler'));
        } catch (\Exception $th) {
            toastr()->error('Beklenmedik Bir Hata Meydana Geldi', 'Hata');
        }
    }
    public function editcategoryPost(Request $request){
        $id = $request->id;
        $urun = Kategori::whereId($id)->first();
        $urun->name = $request->name;
        if($request->hasFile('img'))
        {
            unlink('dist/_upload/'.$urun->img);
            $name = uniqid();
            $fileEx = $request->img->extension();
            $type = $request->img->getClientMimeType();
            $new_name = $name . '.' . $fileEx;
            $request->img->move('dist/_upload', $new_name);
            // Resmi kaydedin
            $urun->img = $new_name;
        }
        $urun->save();
        toastr()->success('Kategori Düzenlendi', 'Başarılı');
        return redirect()->back();
    }
}
