<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function edit() {
        try {
            $customer = Customer::find(request('id'));

            $customer->name = request('name');
            $customer->email = request('email');
            $customer->dob = request('dob');
            $customer->save();

            return response()->json($customer);

        } catch (\Throwable $th) {
            return response()->json("lỗi");
        }

    }
}
