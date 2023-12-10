<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class products extends Controller
{
    //
    function addProdPage(){
        return view('addProducts');
    }

    function addProduct(Request $data){
        DB::table('products_table')->insert([
            'prodName'=>$data['prodName'],
            'prodPrice'=>$data['prodPrice'],
            'prodDesc'=>$data['prodDesc'],
        ]);
        return back()->with('productAdded', 'Product Added Successfully');
        // return $data;
    }
    function allProductsPage(){

        $products = DB::table('products_table')->get();

       return view('allProducts', ['products' => $products]);
    //    return $products;
    }
    function updateProductPage($id){
        $product = DB::table('products_table')->where('id', $id)->get();
        return view('updateProduct', ['product' => $product]);
        // return $product->prodName;
    }
    function updateProduct(Request $updatedData,$id){


        DB::table('products_table')->where('id',$id)->update([
            'prodName' => $updatedData['prodName'],
            'prodPrice' => $updatedData['prodPrice'],
            'prodDesc' => $updatedData['prodDesc']
        ]);
        
        return back()->with('productUpdated','Product Updated Successfully');


        // return $updatedData;
        // return $id;
    }

    function deleteProduct($id){
        DB::table('products_table')->where('id', $id)->delete();
        return back()->with('productDeleted','Product deleted successfully');
    }
}
