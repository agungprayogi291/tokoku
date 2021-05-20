<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produks = produk::latest()->simplePaginate(6);
        $data = [
            'produks' => $produks
        ];
        return view('dashboard.admin.produk.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        $data = [
            'produk' => new produk(),
            'categories' => $category
        ];
        return view('dashboard.admin.produk.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'nama_produk' => 'required|min:3',
                'stock_produk' => 'required|min:1',
                'description' => 'required|min:5',
                'image' =>'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
                'harga' => 'required|min:4',
        ]);

        $file = $request->file('image');
        $image = $file->move('img/upload/',time().'-'. Str::limit(Str::slug(
            'produk'),50,'').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());

    
        $produk = new produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->stock_produk = $request->stock_produk;
        $produk->image_produk = $image;
        $produk->description = $request->description; 
        $produk->users_id = $request->users_id;
        $produk->categories_id = $request->categories_id;
        $produk->harga = $request->harga;
        $produk->save();
         
        session()->flash('success','create success');
        return redirect()->to('/dashboard/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
       
        return view('dashboard.admin.produk.edit',compact('produk'),['categories'=> category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $img = '';
        if($request->image != null){
            $file = $request->file('image_produk');
            $image = $file->move('img/upload/',time().'-'.Str::limit(Str::slug('produk'),50,'').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
                $img ='';
        }else{
            $img = $request->image_produk;
        }
        
        $produks = produk::find($request->id);
        $produks->nama_produk = $request->nama_produk;
        $produks->stock_produk = $request->stock_produk;
        $produks->image_produk = $img;
        $produks->harga = $request->harga;
        $produks->categories_id = $request->categories_id;
        $produks->description = $request->description;
        $produks->users_id = $request->users_id;
        $produks->save();
        session()->flash('success','update berhasil');
        return back();
    }


    public function updateGambar($request){
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        session()->flash('success','an items succes to delete');
        return back();
    }



}
