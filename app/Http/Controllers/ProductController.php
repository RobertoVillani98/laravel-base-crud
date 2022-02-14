<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validation
        $request->validate([
            "title" => "required|string|max:100",
            "description" => "required|string",
            "image" => "required|url",
            "price" => "required|numeric|min:0.01|max:999.99",
            "series" => "required",
            "sale_date" => "required|date",
            "type" => [
                "required",
                Rule::in(["comic book", "graphic novel"])
            ]
        ]);

        $newProduct = new Product();
        $newProduct->title = $data["title"];
        $newProduct->description = $data["description"];
        $newProduct->image = $data["image"];
        $newProduct->price = $data["price"];
        $newProduct->series = $data["series"];
        $newProduct->sale_date = $data["sale_date"];
        $newProduct->type = $data["type"];
        $newProduct->save();
        return redirect()->route("products.show", $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        // validation
        $request->validate([
            "title" => "required|string|max:100",
            "description" => "required|string",
            "image" => "nullable|url",
            "price" => "required|numeric|min:0.01|max:999.99",
            "series" => "required|string|max:50",
            "sale_date" => "required|date",
            "type" => [
                "required",
                Rule::in(["comic book", "graphic novel"])
            ]
        ]);

        $product->title = $data['title'];
        $product->description = $data['description'];
        $product->image = $data['image'];
        $product->price = $data['price'];
        $product->series = $data['series'];
        $product->sale_date = $data['sale_date'];
        $product->type = $data['type'];
        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
