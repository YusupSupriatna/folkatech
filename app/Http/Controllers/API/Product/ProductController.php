<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // List Product
    public function index(Request $request) {
        $product = Product::with('image');

        $product->when($origin = $request->origin, function($q) use($origin){
            $q->whereIn('origin', $origin);
        });
        $product->when($species = $request->species, function($q) use($species){
            $q->whereIn('species', $species);
        });
        $product->when($roast_lavel = $request->roast_lavel, function($q) use($roast_lavel){
            $q->whereIn('roast_lavel', $roast_lavel);
        });
        $product->when($tasted = $request->tasted, function($q) use($tasted){
            $q->whereIn('tasted', $tasted);
        });
        $product->when($processing = $request->processing, function($q) use($processing){
            $q->whereIn('processing', $processing);
        });
        $product->when($search = $request->search, function($q) use ($search) {
            $q->where('product_name','like','%'.$search.'%');
        });
        $product = $product->paginate($request->limit);
        return $product;
    }

    // Detail Product
    public function show($id) {
        $product = Product::find($id);
        return $product;
    }

    public function store() {

    }

    public function destroy() {

    }
}
