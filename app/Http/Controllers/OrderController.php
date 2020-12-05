<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    function FormSubmit(Request $request) {

        $request->validate([
            'fullname'              =>  'required',
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        $image = $request->file('image');
        $screen = $request->file('screen');
        $price = $request->input('price');

        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath,  $input['imagename']);


        $imgname = $input['imagename'] ;

        $order = Order::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'price' => $price,
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'num' => $request->input('num'),
            'qte' => $request->input('qte'),
            'screen' => $request->input('screen'),
            'image' => $imgname,

        ]);

        return view('welcome', compact('order'));

    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        if ($order) {$order->delete();}
        return redirect('home');
    }
}
