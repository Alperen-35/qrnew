<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'urunler';

    protected $fillable = [
        'name',
        'desc',
        'price',
        'cate',
        'img'
    ];
    
    public function getKate()
    {
        return $this->hasOne('App\Models\Kategori', 'id', 'cate');
    }
    public function getProducts()
    {
        return $this->all();
    }
}