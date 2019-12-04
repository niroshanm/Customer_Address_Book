<?php

namespace App\Http\Controllers;
use App\customers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = customers::where('user_id', auth()->user()->id)->get();
        
        return response()->json($customer, 201);
    }

    public function show()
    {
        $customer = customers::all();
        
        return response()->json($customer, 201);
    }

    public function store(Request $request)
    {
        $customer = new customers();
        $data = $this->validate($request, [
            'user_id'=>'required',
            'name'=>'required',
            'nic'=>'required',
            'address'=>'required',
            'telephone1'=>'required',
            'telephone2'=>'required',
            'telephone3'=>'required',
            'telephone4'=>'required'
        ]);
       
        $customer->saveCustomer($data);
        return response()->json($customer, 201);
    }

    public function edit($id)
    {
        $customer = customers::where('user_id', auth()->user()->id)
                        ->where('user_id', $id)
                        ->first();

        // Needs to return proper view
    }

    public function update(Request $request, $id)
    {
        $customer = new customers();
        $data = $this->validate($request, [
            'user_id'=>'required',
            'name'=>'required',
            'nic'=>'required',
            'address'=>'required',
            'telephone1'=>'required',
            'telephone2'=>'required',
            'telephone3'=>'required',
            'telephone4'=>'required'
        ]);
        $data['id'] = $id;
        $customer->updateCustomer($data);

        return response()->json($customer, 200);
    }

    public function delete($id)
    {
        $customer = customers::find($id);
        $customer->delete();

        return response()->json(null, 204);
    }
}
