<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Order;

use App\Models\Cart;

use App\Models\Book;



use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;


class HomeController extends Controller
{
    

public function my_home(){

    $data = Food::all();

    return view('home.index',compact('data'));
}


    public function index(){

        if(Auth::id()){

        $usertype = Auth()->user()->usertype;

        if($usertype == 'user')
        {

            $data = Food::all();
            return view('home.index',compact('data'));
        }

        else 
        {
            $total_user = User::where('usertype','=','user')->count();

            $total_food = Food::count();

            $total_order = Order::count();

            $total_delivered = Order::where('delivery_status','=',
            'Delivered')->count();


            return view('admin.index',compact(
                'total_user','total_food','total_order','total_delivered'));
        }

        }

    }

    public function add_cart(Request $request,$id){


        if(Auth::id()){


            $food = Food::find($id);
            
            $cart_title = $food->title;

            $cart_details = $food->detail;

            $cart_price =Str::remove('$',$food->price);

            $cart_image = $food->image;


            $data = new Cart;

            $data->title = $cart_title;

            $data->details = $cart_details;

            $data->price = $cart_price * $request->qty;

            $data->image = $cart_image;
            
            $data->quantity = $request->qty;

            $data->userid = Auth()->user()->id;

            $data->save();

            return redirect()->back();




        }

        else{

            return redirect("login");
        }
    }


    public function my_cart(){

        $user_id = Auth()->user()->id;

        $data = Cart::where('userid','=',$user_id)->get();

        return view('home.my_cart',compact('data'));

    }


    public function remove_cart($id){

        $data = Cart::find($id);

        $data->delete();
        
        return redirect()->back();

    }


    public function confirm_order(Request $request){

      $user_id = Auth()->user()->id;

      $cart = Cart::where('userid','=',$user_id)->get();

      foreach($cart as $cart){

        $order = new Order;

        $order->name = $request->name;

        $order->email= $request->email;

        $order->phone = $request->phone;

        $order->address = $request->address;

        $order->title = $cart->title;

        $order->quantity = $cart->quantity;

        $order->price = $cart->price;

        $order->image = $cart->image;

        $order->save();

        $data = Cart::find($cart->id);

        $data->delete();



      }

      return redirect()->back();

    }


public function book_table(Request $request){

$data = new Book;

$data->phone = $request->phone;

$data->guest = $request->n_guest;

$data->time = $request->time;

$data->date = $request->date;

$data->save();

return redirect()->back();


}


}
