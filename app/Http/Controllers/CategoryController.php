<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $categories =\App\Category::all();
        switch ($id) {
            case '1':
                $products = \App\Product::where('category_id','=', '1')->get();
                $sandalias = \App\Category::find(1);
                return view('categorias.sandalias')->with(compact('sandalias', 'products','categories'));
                break;
            case '2':
                $products = \App\Product::where('category_id','=', '2')->get();
                $camisas = \App\Category::find(2);
                return view('categorias.camisas')->with(compact('camisas', 'products','categories'));
                break;
            case '3':
                $products = \App\Product::where('category_id','=', '3')->get();
                $remeras = \App\Category::find(3);
                return view('categorias.remeras')->with(compact('remeras', 'products','categories'));
                break;
            case '4':
                $products = \App\Product::where('category_id','=', '4')->get();
                $zapatillas = \App\Category::find(4);
                return view('categorias.zapatillas')->with(compact('zapatillas', 'products','categories'));
                    break;
            case '5':
                $products = \App\Product::where('category_id','=', '5')->get();
                $camperas = \App\Category::find(5);
                return view('categorias.camperas')->with(compact('camperas', 'products','categories'));
                break;
            case '6':
                $products = \App\Product::where('category_id','=', '6')->get();
                $buzos = \App\Category::find(6);
                return view('categorias.buzos')->with(compact('buzos', 'products','categories'));
                break;  
            case '7':
                $products = \App\Product::where('category_id','=', '7')->get();
                $pantalones = \App\Category::find(7);
                return view('categorias.pantalones')->with(compact('pantalones', 'products','categories'));
                break;     
                case '8':
                $products = \App\Product::where('category_id','=', '8')->get();
                $blusas = \App\Category::find(8);
                return view('categorias.blusas')->with(compact('blusas', 'products','categories'));
                    break;
            case '9':
                $products = \App\Product::where('category_id','=', '9')->get();
                $vestidos = \App\Category::find(8);
                return view('categorias.vestidos')->with(compact('vestidos', 'products','categories'));
                break;
            default:
                break;
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
    }
}
