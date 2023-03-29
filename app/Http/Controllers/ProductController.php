<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table("products")->get();
        return view('products.index',['products'=>$data]);
    }
    
    public function delete($id){
        $delete=DB::table("products")
        ->where("id", "=", $id)
        ->delete();

        return redirect("/products")->with("success", "Product Deleted Successfully!");
    }

    public function addProduct(){
        return view('products.add');
    }

    public function saveProduct(request $req){
       // dd($req);
       $validate=$req->validate([
        "description"=>['required', 'min:3'],
        "quantity"=>['required','min:1'],
        "price"=>['required','min:1']
       ]);

       $data=Product::create($validate);
       return redirect("/products")->with('success','Product Added Sucessfully!');
    }

    public function edit($id){
        $data=Product::findOrFail($id);
        return view('products.edit',['product'=>$data]);
    }

    public function updateProduct(Request $req){
        $req->validate([
            "description"=>['required', 'min:3'],
            "quantity"=>['required','min:1'],
            "price"=>['required','min:1']
           ]);

           $data=Product::find($req->id);
           $data->description=$req->description;
           $data->quantity=$req->quantity;
           $data->price=$req->price;
           $data->save();

           return redirect("/products")->with('success','Edit Sucessfully!');
    } 
}
?>