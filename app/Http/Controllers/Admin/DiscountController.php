<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Discount\Store;
use App\Models\Discount;

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

    public function store(Store $request)
    {
        $discount = Discount::create($request->all());
        $request->session()->flash('success', 'A new discount has been created');
        return redirect(route('admin.discount.index'));
    }
}
