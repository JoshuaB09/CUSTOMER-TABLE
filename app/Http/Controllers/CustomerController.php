<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    }
    
    public function delete($id){
        $delete=DB::table("customers")
        ->where("id", "=", $id)
        ->delete();

        return redirect("/")->with("success", "Customer Deleted Successfully!");
    }

    public function addCustomer(){
        return view('customer.add');
    }

    public function saveCustomer(request $req){
       // dd($req);
       $validate=$req->validate([
        "lastName"=>['required', 'min:4'],
        "firstName"=>['required', 'min:4'],
        "email"=>['required','email',
        Rule::unique('users','email')],
        "contactNumber"=>['required','min:11'],
        "address"=>['required','min:4']
       ]);

       $data=Customer::create($validate);
       return redirect("/")->with('success','Customer Added Sucessfully!');
    }

    public function edit($id){
        $data=Customer::findOrFail($id);
        return view('customer.edit',['customer'=>$data]);
    }

    public function updateCustomer(Request $req){
        $req->validate([
            "lastName"=>['required', 'min:4'],
            "firstName"=>['required', 'min:4'],
            "email"=>['required','email',
            Rule::unique('users','email')],
            "contactNumber"=>['required','min:11'],
            "address"=>['required','min:4']
           ]);

           $data=Customer::find($req->id);
           $data->lastName=$req->lastName;
           $data->firstName=$req->firstName;
           $data->email=$req->email;
           $data->contactNumber=$req->contactNumber;
           $data->address=$req->address;
           $data->save();

           return redirect("/")->with('success','Edit Sucessfully!');
    } 
}
?>