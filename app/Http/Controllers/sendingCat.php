<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sendingCat extends Controller
{
	
   public function insert(Request $request) {
      $name = $request->input('name');
      $info = $request->input('info');
      $category = $request->input('category');
      $barecode = $request->input('barecode');
      DB::insert('insert into products (name, info,category,barecode) values(?,?,?,?)',[$name,$info,$category,$barecode]);
      return redirect()->route('home', ['added' => 1]);
   }
   public function select() {
       $value = DB::select('select * FROM products');
       return view('ultime')->with('data', $value);
   }
   public function selectByCategories(Request $request) {
    $category = $request->input('category');
    if(!$category){
        $value = DB::select('select * FROM products ORDER BY category'); 
        return view('ultimax')->with('data', $value); 
    } else{
        $value = DB::select('select * FROM products WHERE category = ?',[$category]);

         return view('ultimax')->with('data', $value); 
    }
}
public function deleteUnique($id) {
    DB::delete('delete from products where id = ?',[$id]);
    return redirect()->back();
}
public function redirectmodify($id) {
    $value = DB::select('select * FROM products where id = ?',[$id]);
    return view('modify')->with('data', $value);
}
public function updateProduct(Request $request,$id) {
    $name = $request->input('name');
    $info = $request->input('info');
    $category = $request->input('category');
    $barecode = $request->input('barecode');
DB::update('update products set name = ?, info = ?, category = ?, barecode = ? where id = ?',[$name,$info,$category,$barecode,$id]); 
return redirect('productsByCategories?category='.$category);
}
}