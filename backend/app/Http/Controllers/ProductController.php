<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        try {
            // Retrieve all products
            $products = Product::all();

            // Check if any products exist
            if ($products->isEmpty()) {
                return response()->json([
                    'message' => 'No products found',
                ], 404); // Not Found
            }

            // Return the products in a successful response
            return response()->json([
                'message' => 'Products retrieved successfully',
                'data' => $products,
            ], 200); // OK
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return response()->json([
                'error' => 'An error occurred while retrieving products',
                'message' => $e->getMessage(),
            ], 500); // Internal Server Error
        }
    }
}
