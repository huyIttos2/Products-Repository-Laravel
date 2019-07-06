<?php


namespace App\Http\Repositories;


interface  Repository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data);
    public function destroy($object);
}