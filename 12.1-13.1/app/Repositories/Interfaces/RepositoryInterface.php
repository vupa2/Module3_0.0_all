<?php

namespace App\Repositories\Interfaces;

interface RepositoryInterface
{
    public function getAll();
    public function find($id);
    public function store($attributes = []);
    public function update($id, $attributes = []);
    public function destroy($id);
}
