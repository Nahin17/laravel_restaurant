<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addfood;

class AdminController extends Controller
{
    public function viewfood(){
        return view('admin.addfood');
    }
public function addfood(Request $request){
    $food= new addfood;
    $food->title=$request->title;
    $food->description=$request->description;
    $food->price=$request->price;
    $food->quantity=$request->quantity;

  //  $image= $request->image;
  //  $imagename=time().'.'.$image->getClientOriginalExtension();
  //  $request->image->move('foods',$imagename); 
     //public folder er moddhe product name er ekta folder khulte hobe pic save korar jonno
   // $food->image=$imagename;
 
       

 $food->save();

 return redirect()->back();
          

    

}

}
