<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduct($id_category, $name_product)
    {
        return response()->json([
            'message' => 'Soy un API',
            'param_1' => $id_category,
            'param_2' => $name_product
        ]);
    }
}
