<?php
/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 15/11/2015
 * Time: 10:21
 */

namespace App\Repository;


abstract class ResourceRepository
{
    protected $model;

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->getById($id)->fill($inputs)->save();
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}