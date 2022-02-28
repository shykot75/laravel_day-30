<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $products;

    public function index(){
        return view('product.add');
    }

    public function create(Request $request)
    {
//        return $request->all();
        // direct static method use na korle aivabe model ke call kore object banate hbe
//        $this->product = new Product();
//        $this->product->newProduct();

        Product::newProduct($request);



//        return redirect()->back()->with('message','Product Created Successfully..'); //avabeo kora jay
        return redirect('/add-product')->with('message','Product Created Successfully..');





    }

    public function manage(){

        $this->products =  Product::orderBy('id','desc')->get();
        return view('product.manage', ['products'=>$this->products]);
    }

    public function edit($id){
        //return $id;
        $this->product = Product::find($id);

        return view('product.edit',['product' => $this->product]);
    }

    public function update(Request $request, $id){
        Product::updateProduct($request);
        return redirect('')
    }











}
