<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::all();

        return view('home', ['customers' => $customers]);
    }

    public function get(Request $request)
    {
        $id = $request->id;
        $customers = Customer::where('id', $id)->get();

        return view('home', ['customers' => $customers]);
    }

    public function store(Request $req)
    {
        $keys = $req->all();

        $customer = new Customer();

        $customer->name = $keys['name'];
        $customer->surname = $keys['surname'];
        $customer->province_id = $keys['province_id'];
        $customer->county_id = $keys['county_id'];
        $customer->country_id = $keys['country_id'];
        $customer->address = $keys['address'];
        $customer->birth = $keys['birth'];
        $customer->active = 1;

        $customer->save();

        return response()->json(['status' => $customer]);
    }
}
