<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
      $product=Product::latest()->paginate(5);
      return view('product',compact('product'));
    }

    public function addProduct(Request $request){
      $request->validate(
        [
        'product_name'=>'required',

        'size'=>'required',
        'total_amount'=>'required'
      ],
      [
        'name.required'=>'Name is Required',
        'size.required'=>'Size is Required',
        'total_amount.required'=>'Amount is required'


      ]


      );
      $product = new Product();
      $product->product_name=$request->product_name;
      $product->size=$request->size;
      $product->total_amount=$request->total_amount;
      $product->save();
       return response()->json([
        'status'=>'success ',
       ]);

      }
      public function updateProduct(Request $request){

        $request->validate(
            [
            'up_product_name'=>'required:products,product_name,'.$request->up_id,
            'up_size'=>'required',
            'up_total_amount'=>'required'
          ],
          [
            'up_name.required'=>'Name is Required',
            'up_size.required'=>'Size is Required',
            'up_total_amount.required'=>'Amount is required'


          ]
);
        Product::where('id',$request->up_id)->update([

        'product_name'=>$request->up_name,
        'size'=>$request->up_size,
        'total_amount'=>$request->up_total_amount,

        ]);

           return response()->json([
            'status'=>'success ',
           ]);

          }
          public function deleteProduct(Request $request){
           Product::find($request->product_id)->delete();
           return response()->json([
            'status'=>'success ',
           ]);

          }

      }

