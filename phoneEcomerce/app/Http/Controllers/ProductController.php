<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        return view("admin.products.create");
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->provider_id = $request->provider_id;
        $product->price = $request->price;
        $product->promotion_price = $request->promotion_price;
        $product->quantity = $request->quantity;
        if($request->hasFile('file'))
        {
            $image = $request->file('file');

            $filename = time().'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(300, 300)->save(public_path('/client/assets/images/'.$filename));
            $product->image = '/client/assets/images/' . $filename;

        }

        $product->save();

        session()->flash("success", "Insert Successfully");
        return redirect('products/index');
    }

      public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->proivder_id = $request->provider_id;
        $product->price = $request->price;
        $product->promotion_price = $request->promotion_price;
        $product->quantity = $request->quantity;

        if($request->hasFile('file'))
        {
            $image = $request->file('file');

            $filename = time().'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(300, 300)->save(public_path('/client/assets/images/'.$filename));
            $product->image = '/client/assets/images/' . $filename;

        }

        $product->save();
        session()->flash("success", "Update Successfully");
         return back();
    }

     public function destroy($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }
}
