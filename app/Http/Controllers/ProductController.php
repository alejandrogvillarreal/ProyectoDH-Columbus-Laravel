<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Category::all();
        $products = \App\Product::paginate(9);
        return view('products.index')->with(compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function store(ProductRequest $request)
    {
        $product = new \App\Product;

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $request->input('image');
        // $product->color = $request->input('color');
        $product->stock = $request->input('stock');
		$product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');

    	$productImage = $request->file('image');
		$imageName = uniqid("product_img_") . "." . $productImage->extension(); $productImage->storePubliclyAs("public/products", $imageName);
        $product->image = $imageName;

        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    $product = \App\Product::findOrFail($id);
		return view('products.show')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function indexEdit()
    {
        $product = \App\Product::all();
		return view('products.myProducts')->with(compact('product'));
		
    }

    public function edit($id)
    {
        $user_id = Auth::user()->id;
		$product = \App\Product::find($id);
        $brands = \App\Brand::all();
        $colors = \App\Color::all();
        $categories = \App\Category::all();
        $subcategories = \App\Subcategory::all();

        if ($user_id == $product->user_id) {
			return view('products.edit')->with(compact('product', 'brands', 'categories', 'colors', 'subcategories'));
		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = \App\Product::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $request->input('image');
        // $product->color = $request->input('color');
        $product->stock = $request->input('stock');
		$product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');

    	$productImage = $request->file('image');
		$imageName = uniqid("product_img_") . "." . $productImage->extension(); $productImage->storePubliclyAs("public/products", $imageName);
        $product->image = $imageName;

        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
    		$product->delete();
    		return redirect('/product');
    }
}
