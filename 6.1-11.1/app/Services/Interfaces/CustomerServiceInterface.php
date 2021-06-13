<?php

namespace App\Services\Interfaces;

interface CustomerServiceInterface {
    public function getAll();
    public function findById($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}
