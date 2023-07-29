<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Urun;
use App\Models\Kategori;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //'success': Başarılı bir işlemi temsil eder. Örneğin, "Kayıt başarıyla oluşturuldu." gibi mesajları göstermek için kullanılabilir.

    //'error': Başarısız bir işlemi veya hata durumunu temsil eder. Örneğin, "Bir hata oluştu, lütfen tekrar deneyin." gibi mesajları göstermek için kullanılabilir.

    //'warning': Uyarı mesajlarını temsil eder. Örneğin, "Bu işlem geri alınamaz, emin misiniz?" gibi mesajları göstermek için kullanılabilir.

    //'info': Bilgilendirme mesajlarını temsil eder. Örneğin, "Bilgilendirme: Şifrenizi unutursanız, şifre sıfırlama talebi yapabilirsiniz." gibi mesajları göstermek için kullanılabilir.
  
    // Giriş işlemini gerçekleştiren method

     public function loginPost(Request $request)
     {
         if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
         {
            // Giriş başarılı.
            toastr()->success('Hoşgeldiniz '.Auth::user()->name, 'Başarılı!');
            return redirect()->route('yonetim');
         }
         else
         {
            // Giriş başarısız.
            toastr()->warning('Kullanıcı Bilgileri Yanlış!','Başarısız!');
            return redirect()->route('login');
         }
     }
    public function logOut()
    {
        toastr()->info('Çıkış Yaptınız','Başarılı!');
        Auth::logout();
        return redirect()->route('/');
    }

    public function addproduct()
    {
        $kategoriler = Kategori::all();
        return view('back.addproduct', compact('kategoriler'));
    }
    
    public function kategori_ekle(){
        $kategoriler = Kategori::all();
        return view('back.addproduct', compact('kategoriler'));
    }
}
