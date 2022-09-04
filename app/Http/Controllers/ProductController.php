<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduct($id_category, $name_product)
    {
        if ($id_category == 0) {
            if ($name_product == 'none') {
                $message = 'todos los productos sin restriccion';
                $data_products = DB::table('product')->paginate(16);
            } else {
                $message = 'todos los productos con la restriccion - '.$name_product;
                $data_products = DB::table('product')
                    ->where('name', 'LIKE', '%'.$name_product.'%')
                    ->paginate(16);
            }
        } else {
            if ($name_product == 'none') {
                $message = 'productos de la categoria '.$id_category.' sin restriccion';
                $data_products = DB::table('product')
                    ->where('category', '=', $id_category)
                    ->paginate(16);
            } else {
                $message = 'todos los productos de la categoria '.$id_category.' con la restriccion - '.$name_product;
                $data_products = DB::table('product')
                    ->where('category', '=', $id_category)
                    ->where('name', 'LIKE', '%'.$name_product.'%')
                    ->paginate(16);
            }
        }
        return response()->json($data_products);
        // TODO: Pendiente validar errores en la respuesta
    }
}
