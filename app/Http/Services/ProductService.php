<?php


namespace App\Http\Services;


interface  ProductService
{
    public  function  getAll();
    public  function  findById($id);
    public  function  create($request);
    public  function  update($request, $id);
    public  function  destroy($id);
}