<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;

class ProductsController extends Controller
{
    public function index(): JsonResponse
    {
        return new JsonResponse (Product::all(), 200);
    }

    public function store(CreateProductRequest $request, ProductService $productService): JsonResponse
    {
        $productService->create($request->all());

        return new JsonResponse(['message' => 'Created!'], 201);
    }

    public function update(EditProductRequest $request, Product $product, ProductService $productService): JsonResponse
    {
        $productService->update($product, $request->all());

        return new JsonResponse(['message' => 'Updated!'], 200);
    }

    public function show(Product $product): JsonResponse
    {
        return new JsonResponse($product, 200);
    }

    public function remove(Product $product): JsonResponse
    {
        $product->delete();

        return new JsonResponse(['message' => 'Deleted!'], 200);
    }
}
