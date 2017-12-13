<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{

    public function __construct(){
      $this->middleware('isAdmin');
    }

    public function index()
    {
      $products = Product::paginate(1);

      return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
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
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
        'category_id' => 'required',
        'srcImg' => 'image'
      ]);

      $product = new Product($request->all());

      $nombre = 'prod_' . $product->name . '.' . $request->file('srcImg')->extension();
// php artisan storage:link :crea un acceso directo en la carpeta que ponemos abajo para ver donde se guardan las imagenes
    	$path = $request->file('srcImg')->storePubliclyAs('/public/productos', $nombre);

      $product->srcImg = $nombre;

      $product->save();


      return back()->with('success', 'Producto fue agregado');
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
      $product = Product::find($id);
      return view('products.edit',compact('product','id'));
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
        $product = Product::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric',
          'description' => 'required'
        ]);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products')->with('success','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }
}
