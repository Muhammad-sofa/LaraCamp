<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function index()
    {
        return view('admin.discount.index');
    }

    public function create()
    {
        return view('admin.discount.create');
    }
}
