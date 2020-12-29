<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers=Supplier::all();
        return view('admin.supplier.index',compact('suppliers'));
    }
}
