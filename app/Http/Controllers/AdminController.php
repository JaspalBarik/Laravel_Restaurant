<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Food;

use App\Models\Order;

use App\Models\Book;



class AdminController extends Controller
{
    
  public function add_food(){

  return view('admin.add_food');

  }

  public function upload_food(Request $request) {

    $data = new Food;

    $data->title = $request->title;

    $data->detail = $request->details;

    $data->price = $request->price;


    $image = $request->img;

    $filename = time().'.'.$image->getClientOriginalExtension();

    $request->img->move('food_img',$filename);

   $data->image = $filename;
    



    $data->save();

    return redirect()->back();

  }


  public function view_food(){

    $data = Food::all();

    return view('admin.show_food',compact('data'));
  }


  public function delete_food($id){

   $data = Food::find($id);

   $data->delete();

   return redirect()->back();

  }


  public function update_food($id){


    $food = Food::find($id);
   return view('admin.update_food',compact('food'));


  }


  public function edit_food(Request $request,$id){

  $data = Food::find($id);
  
  $data->title = $request->title;

  $data->detail = $request->details;

  $data->price = $request->price;


  $image = $request->image;
  if($image){

   $imagename=time().'.'.$image->getClientOriginalExtension();

   $request->image->move('food_img',$imagename);

   $data->image = $imagename;

  }


  $data->save();

  return redirect('view_food');


}


public function orders(){

  $data = Order::all();

  return view('admin.order',compact('data'));

  
}


public function on_the_way($id){

$data = Order::find($id);

$data->delivery_status = "On the Way";

$data->save();

return redirect()->back();


}


public function delivered($id){

  $data = Order::find($id);
  
  $data->delivery_status = "Delivered";
  
  $data->save();
  
  return redirect()->back();
  
  
  }


  public function canceled($id){

    $data = Order::find($id);
    
    $data->delivery_status = "Canceled";
    
    $data->save();
    
    return redirect()->back();
    
    
    }


    public function reservations(){

      $book = Book::all();


     return view('admin.reservation',compact('book'));


    }




}
