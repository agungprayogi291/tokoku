<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required|min:3',
            'stock_produk' => 'required|min:1',
                 'image' =>'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            'description' => 'required|min:5',
            'harga' => 'required|min:4'
        ];
    }
}
