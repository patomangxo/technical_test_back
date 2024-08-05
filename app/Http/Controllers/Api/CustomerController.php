<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function get (Request $request) {
        $customers = Customer::all();

        return response()->json($customers, 200);
    }
}
