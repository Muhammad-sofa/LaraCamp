<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Discount\Store;
use App\Http\Requests\Admin\Discount\Update;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discount.index', [
            'dicounts' => $discounts
        ]);
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

    public function edit (Discount $discount)
    {
        return view('admin.discount.edit', [
            'discount' => $discount
        ]);
    }

    public function update(Update $request, Discount $discount)
    {
        $discount->update($request->all());
        $request->session()->flash('success', "Discount {$discount->name} has been updated");
        return redirect(route('admin.discount.index'));
    }
}
