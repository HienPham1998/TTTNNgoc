<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Product;
use App\Productdetail;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand::all();
        $products = Product::orderBy("created_at", "desc");
        if($request->search) {
            $products = $products->where("name", "like", "%" . $request->search . "%"); 
        }
        $products = $products->paginate(20);
        return view('client.index',compact('brands','products'));
    }

    public function getProductDetail($id,Request $request){
        $brands = Brand::all();
        $product = Product::where("id", $id)->first();
        $product_detail = Productdetail::where('product_id',$id)->first();
        return view('client.productdetail',compact('brands','product','product_detail'));
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

    public function getCart(){
        $brands = Brand::all();
        $products = \Cart::content();
        $sum = 0;
        foreach($products as $product){
            $sum = $sum + $product->options->promotion_price * $product->qty;
        }
        return view('client.cart',compact("brands", "products", "sum"));
    }
    public function addToCart($id, Request $request) {
        $product = Product::find($id);
        if ($product) {
            \Cart::add([
                'id' => $id,
                'name' => $product->name,
                'qty' => 1,
                'price' =>$product->price,
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'brand_name' => $product->brand->name,
                    'promotion_price'=> $product->price -  $product->price * $product->sale / 100
                ]
            ]);
        }
        return redirect()->back();
    }
    public function removeCart($id, Request $request) {
        \Cart::remove($id);
        return redirect()->back();
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
