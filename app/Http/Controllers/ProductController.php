<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Http\Services\ProductService;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService =$productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.add');
    }


    public function store(CreateProductRequest $request)
    {
        $this->productService->create($request);
        return redirect()->route('products.index')->with('success', 'Product saved!');
    }


    public function show($id)
    {
        $product = $this->productService->findById($id);
        return view('products.details',compact('product'));
    }


    public function edit($id)
    {
        $product = $this->findById($id);
        return view('products.edit',compact('product'));
    }

    public function update(EditProductRequest $request, $id)
    {
        $this->productService->update($request,$id);
        return redirect()->route('products.index')->with('success', 'Product updated!');
    }

    public function delete($id)
    {
        $product = $this->findById($id);
        return view('products.delete', compact('product'));
    }

    public function destroy($id)
    {
        $this->productService->destroy($id);
        return redirect()->route('products.index')->with('success', 'Product deleted!');
    }

    public function findById($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
}
