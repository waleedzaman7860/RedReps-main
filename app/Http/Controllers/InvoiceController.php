<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
        // dd("str");
        return view('admin.invoice');
    }
}
