<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findById($id)
    {
        try {
            $result = $this->model->findOrFail($id);
        } catch (\Exception $e) {
            return null;
        }

        return $result;
    }

    public function store($data)
    {
        try {
            $object = $this->model->create($data);
        } catch (\Exception $e) {
            return null;
        }

        return $object;
    }

    public function update($data, $object)
    {
        $object->update($data);

        return $object;
    }

    public function destroy($object)
    {
        return $object->delete();
    }
}
