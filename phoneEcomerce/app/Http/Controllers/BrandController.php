<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.brands.index', compact('brands'));
    }
    public function create()
    {
        return view("admin.brands.create");
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;

        $brand->save();

        session()->flash("success", "Insert Successfully");
        return redirect('brands/index');
    }

      public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;

        $brand->save();
        session()->flash("success", "Update Successfully");
         return back();
    }

     public function destroy($id, Request $request)
    {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }
}
