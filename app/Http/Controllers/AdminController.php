<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Controllers\Controller;
use Redirect;

class AdminController extends Controller
{
    //
	public function index(){
		return view('login');
	}
	
	public function insertProduct(Request $request){
		
		$productimage = $request->file('productimage');
		$filename = $productimage->getClientOriginalName();	
		$destinationPath = 'images';
        $productimage->move($destinationPath,$productimage->getClientOriginalName());
		
        $productname = $request->input('productname');
        $productprice = $request->input('productprice');
        $productunit = $request->input('productunit');
        $data = array(
						'image'=>$filename,
						'name'=>$productname,
						'price'=>$productprice,
						'unit'=>$productunit
					);
        DB::table('products')->insert($data);
		return Redirect::to('getProducts')->with('success', 'Product inserted successfully!');   
	}
	
	public function user(){
		$products = DB::select('select id,name,image,price,unit from products');
        return view('index',['products' => $products]);
	}
	
	public function logincheck(Request $request){
		
		$data = array(
						'username' => $request->input('username'),
						'password' => $request->input('password')
					);
		$user = DB::table('users')->where($data)->first();
		if($user){
			return Redirect::to('getProducts')->with('success', 'Login successfully!');
        } else {
			return Redirect::to('admin')->with('failure','Oppes! You have entered invalid credentials');
		}
	}
	
	public function getProducts(){
		$products = DB::select('select id,name,image,price,unit from products');
        return view('productlist',['products' => $products]);
	}
	
	public function logout(){
		return redirect('admin');
	}
}
