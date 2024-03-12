<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Categories::all();
        return view('products.create', compact('products','users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product->user_id = $request->user_id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('inicio.products');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$id)
    {
        $product = Product::findOrFail($id);
        $products = Product::all(); // Aquí deberías cargar todos los productos si los necesitas en la vista
        $categories = Categories::all();
        $users = User::all();
        return view('products.edit', compact('product', 'products', 'categories','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $user = User::all();
        $categories= Categories::all();
    
        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
    
        $product->update([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
        ]);
    
        // Una vez que se ha actualizado el producto, puedes redirigir a una vista que muestre el producto actualizado
         return redirect()->route('inicio.products')->with('success', 'Producto actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('inicio.products')->with('success', 'Producto actualizada correctamente');
    }
}
