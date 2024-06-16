<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class ProductService
{
    public function create(array $data): Model|JsonResponse
    {
        if (! empty($data['photo'])) {
            $data['photo'] = base64_encode(file_get_contents($data['photo']->path()));
        } else {
            return new JsonResponse(['message' => 'Something went wrong'], 503);
        }

        return Product::query()->create($data);
    }

    public function update(Product $product, array $data): void
    {
        if (! empty($data['photo'])) {
            $data['photo'] = base64_encode(file_get_contents($data['photo']->path()));
        }

        $product->update($data);
    }
}
