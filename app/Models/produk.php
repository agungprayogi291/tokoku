<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama_produk','stock_produk','description','harga'];
    public function users(){
    	return $this->belongsTo(User::class);
    }
    public function categories()
    {
    	return $this->belongsTo(Category::class);
    }
}
