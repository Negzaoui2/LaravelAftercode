<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('products', 'public'); // Stockage dans storage/app/public/products
            $fileName = basename($imagePath);

            // Déplacer l'image vers le répertoire public/storage/products
            $image->move(public_path('storage/products'), $fileName);

            // Enregistrement du chemin relatif pour la base de données
            $product->image = 'products/' . $fileName;
        }

        $product->save();

        return response()->json($product, 201);
    }




}
