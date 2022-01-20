<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pro_code' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = new product();
        $product->pro_code = $request->pro_code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->meta_desc = $request->meta_desc;

        if ($product->save()) {
            return redirect(route('admin.product'))->with('success', "product Berhasil Ditambahkan");
        }
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(route('admin.product'))->with("success-del", "product Berhasil Dihapus");
    }

    public function update_record(Request $request, $id)
    {
        $this->validate($request, [
            'pro_code' => 'required',
            'name' => 'required',
            'price' => 'nullable',
            'meta_desc' => 'nullable',
        ]);

        $product = Product::findOrFail($id);
        $product->pro_code = $request->pro_code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->meta_desc = $request->meta_desc;
        $product->save(); //this will UPDATE the record

        return redirect(route('admin.product'))->with("success", "product Berhasil Diperbaharui");
    }


}
