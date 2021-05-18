<?php

namespace App\Http\Controllers;
use App\models\produk;
use App\Models\category;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        $produks = produk::all();
        $categories = category::all();
        $data = [

            'produks' => $produks,
            'categories' => $categories

        ];
        return view('index' ,$data);
    }

    
}
