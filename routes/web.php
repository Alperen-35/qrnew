<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('/');
//Kullanıcının ulaşabildiği sayfalar
Route::get('login', function () {return view('front.login');})->name('login');
Route::post('loginPost', [Controller::class, 'loginPost'])->name('loginPost');
Route::get('logOut', [Controller::class, 'logOut'])->name('logOut');
//Kullanıcının ulaşamadığı sayfalar
Route::middleware('auth','verified')->group(function()
{
    Route::get('yonetim', function () {return view('back.yonetim');})->name('yonetim');
    Route::get('pagesettings', function () {return view('back.pagesettings');})->name('pagesettings');
    Route::get('addproduct',[Controller::class,'addproduct'])->name('addproduct');
    Route::post('addproductPost', [Controller::class, 'addproductPost'])->name('addproductPost');
    Route::post('addcategoryPost', [ProcessController::class, 'addcategoryPost'])->name('addcategoryPost');
    Route::get('/editproduct/{slug}',[PageController::class,'editproduct'])->name('editproduct');
    Route::get('productAllDelete',[ProcessController::class,'productAllDelete'])->name('productAllDelete');
    Route::get('categoryAllDelete',[ProcessController::class,'categoryAllDelete'])->name('categoryAllDelete');
    Route::get('kategori_ekle',[Controller::class,'kategori_ekle'])->name('kategori_ekle');
    Route::post('productDelete', [Controller::class, 'productDelete'])->name('productDelete');
    Route::get('managecategory',[PageController::class,'managecategory'])->name('managecategory');
    Route::post('productAdd', [ProcessController::class, 'addproductPost'])->name('productAdd');
    Route::get('products', [Controller::class, 'products'])->name('products');
    Route::get('manageproduct',[PageController::class,'manageproduct_page'])->name('manageproduct');
    Route::get('addcategory',[PageController::class,'addcategory'])->name('addcategory');
    Route::get('/urunDelete/{id}', [ProcessController::class, 'urunDelete'])->name('urunDelete');
    Route::get('/siparisPost/{id}', [ProcessController::class, 'siparisPost'])->name('siparisPost');
    Route::get('/urunDelete2/{id}', [ProcessController::class, 'urunDelete2'])->name('urunDelete2');
    Route::post('/urunDuzenle', [ProcessController::class, 'urunDuzenle'])->name('urunDuzenle');
    Route::get('/categoryDelete/{id}', [ProcessController::class, 'categoryDelete'])->name('categoryDelete');
    Route::get('/categoryDelete2/{id}', [ProcessController::class, 'categoryDelete2'])->name('categoryDelete2');
    Route::get('/editcategory/{slug}', [PageController::class, 'editcategory'])->name('editcategory');
    Route::post('/editcategoryPost/{slug}', [ProcessController::class, 'editcategoryPost'])->name('editcategoryPost');
});
