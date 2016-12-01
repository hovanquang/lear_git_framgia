<?php

namespace App\Http\Controllers;



use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class giohangcontroller extends Controller {

public  function  muahang($id){
    $data = DB::table('sanphams')->where('id',$id)->first();
    Cart::add(array('id'=>$id,'name'=>$data->ten_sp,'qty'=>1,'price'=>$data->don_gia,'options'=>array('img'=>$data->hinh_anh)));
    $content = Cart::content();
    //print_r($content);
//   return redirect()->route('giohang');
   return redirect()->route("trangchu");

}
public  function giohang(){
    return view('shoppingcart');
}
public  function xoa(){
    if(\Request::ajax()){

        $id= \Request::get('id');
        Cart::remove($id);
        ECHO "OKE";

    }

//    return redirect()->route('giohang');
}
public  function capnhat(){
   if(\Request::ajax()){

      $id= \Request::get('id');
     $qty =\Request::get('qty');
      Cart::update($id,$qty);
    ECHO "OKE";

   }

}
}
