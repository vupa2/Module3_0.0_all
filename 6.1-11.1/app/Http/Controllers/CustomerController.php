<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\CustomerServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();

        return view('customers.frontend.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.frontend.create');
    }

    public function store(Request $request)
    {
        $customer = $this->customerService->store($request->all());

        return redirect()->route('customers.index')->with('success', Lang::get('create success'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer = $this->customerService->findById($id)['customer'];
        // dd($customer);
        return view('customers.frontend.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->customerService->update($request->all(), $id);

        return redirect()->route('customers.index')->with('success', Lang::get('updated success'));
    }

    public function destroy($id)
    {
        $customer = $this->customerService->destroy($id);

        return redirect()->route('customers.index')->with('success', Lang::get('delete success'));
    }
}
