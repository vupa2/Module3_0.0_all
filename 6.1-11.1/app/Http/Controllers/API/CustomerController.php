<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CustomerServiceInterface;
use Illuminate\Http\Request;

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

        return response()->json($customers, 200);
    }

    public function store(Request $request)
    {
        $data = $this->customerService->store($request->all());

        return response()->json($data['customers'], $data['statusCode']);
    }

    public function show($id)
    {
        $data = $this->customerService->findById($id);

        return response()->json($data['customers'], $data['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $data = $this->customerService->update($request->all(), $id);

        return response()->json($data['customers'], $data['statusCode']);
    }

    public function destroy($id)
    {
        $data = $this->customerService->destroy($id);

        return response()->json($data['message'], $data['statusCode']);
    }
}
