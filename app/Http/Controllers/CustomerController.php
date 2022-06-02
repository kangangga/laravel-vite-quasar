<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return inertia('data-master/customer/index', [
            'customers' => $customers,
            'title' => 'Data Master Customer',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('data-master/customer/create', [
            'title' => 'Create Data Customer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        $customer = Customer::create($data);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Data Customer berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return inertia('data-master/customer/edit', [
            'customer' => $customer,
            'title' => "Edit Data Customer",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        $customer->update($data);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Data Customer berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()
            ->route('customer.index')
            ->with('success', 'Data Customer berhasil dihapus');
    }
}
