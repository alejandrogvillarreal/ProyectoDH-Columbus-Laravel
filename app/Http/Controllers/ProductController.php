<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = \App\Product::all();
        return view('')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $colors = \App\Color::all();
        $brands = \App\Brand::all();
		$categories = \App\Category::all();
		$subcategories = \App\Subcategory::all();
		return view('products.create')->with(compact('brands', 'categories', 'colors', 'subcategories'));
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
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $request->input('image');     
        $product->color = $request->input('color');   
		$product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');

        return redirect('');
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
        
		$product = Product::find($id);
		return view('')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user_id = Auth::user()->id;
		$product = Product::find($id);
        $brands = \App\Brand::all();
        $product = \App\Color::all();        
        $categories = \App\Category::all();
        
        if ($user_id == $product->user_id) {
			return view('')->with(compact('product', 'brands', 'categories', 'colors'));
		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
		$product->image = $request->input('image');        
		$product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
		$product->delete();
		return redirect('');
    }
}
