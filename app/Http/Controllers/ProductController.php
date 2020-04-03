<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:4|max:50',
            'image' => 'required|image|max:2000',
            'price' => 'required|numeric',
            'description' => 'required|min:15|max:5000',
        ];

        $this->validate($request, $rules);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $image = $request->file('image');
        $imageName = 'product-' . time() . Str::random(20);
        $extension = strtolower($image->getClientOriginalExtension());
        $imageFullName = $imageName. '.' .$extension;
        $uploadPath = 'img/products/';
        $imageURL = $uploadPath . $imageFullName;
        $success = $image->move($uploadPath, $imageFullName);
        $product['image'] = $imageURL;
        // return response()->json($product);

        $product->save();
        return redirect()->route('all.products')->with('success','Post added successfully.');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $image = $product->image;

        $delete = DB::table('products')->where('id', $id)->delete();
        if ($delete) {
            unlink($image);
            return redirect()->route('all.products')->with('success','Post added successfully.');
        }
    }
}
