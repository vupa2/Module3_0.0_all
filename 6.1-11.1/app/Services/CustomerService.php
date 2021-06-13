<?php

namespace App\Services;

use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Services\Interfaces\CustomerServiceInterface;

class CustomerService implements CustomerServiceInterface
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function findById($id)
    {
        $customer = $this->customerRepository->findById($id);

        $statusCode = 200;

        if (!$customer) {
            $statusCode = 404;
            $customer = 'Customer Not Found';
        }

        return [
            'statusCode' => $statusCode,
            'customer' => $customer
        ];
    }

    public function store($request)
    {
        $customer = $this->customerRepository->store($request);

        $statusCode = 201;

        if (!$customer) {
            $statusCode = 500;
        }

        return [
            'statusCode' => $statusCode,
            'customer' => $customer
        ];
    }

    public function update($request, $id)
    {
        $oldCustomer = $this->customerRepository->findById($id);

        if (!$oldCustomer) {
            $newCustomer = null;
            $statusCode = 404;
        } else {
            $newCustomer = $this->customerRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }

        return [
            'statusCode' => $statusCode,
            'customer' => $newCustomer
        ];
    }

    public function destroy($id)
    {
        $customer = $this->customerRepository->findById($id);

        if (!$customer) {
            $statusCode = 404;
            $message = "Customer not found";
        } else {
            $this->customerRepository->destroy($customer);
            $statusCode = 200;
            $message = "Delete success!";
        }

        return [
            'statusCode' => $statusCode,
            'message' => $message
        ];
    }
}
