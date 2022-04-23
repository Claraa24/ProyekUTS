<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required|max:255|unique:products',
            'price' => 'required|max:255',
            'image'=> 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validate['image']= $request->file('image')->store('image');
        }

        Product::create($validate);

        return redirect('/dashboard/products')->with('success','Produk baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('dashboard.products.edit',[
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
  
        $rules = [
            'name' => 'required|max:255|unique:products',
            'price' => 'required|max:255',
            'image'=> 'image|file|max:1024'
        ];
        
        
        //kondisi dilakukan agar jika update tanpa mengubah nama produk dapat dilakukan
        if($request->name != $product->name){
            $rules['name'] = 'required|max:255|unique:products';
        }
        
        $validate = $request->validate($rules);

        Product::where('id',$product->id)
            ->update($validate);
        
        return redirect('/dashboard/products')->with('success','product telah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('/dashboard/products')->with('success','Produk telah dihapus');
    }
}
