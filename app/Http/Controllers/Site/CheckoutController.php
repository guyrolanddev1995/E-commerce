<?php

namespace App\Http\Controllers\Site;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests\CheckoutFormRequest;
use App\Notifications\NewOrder;

class CheckoutController extends Controller
{
    public function create()
    {
        return view('site.pages.checkout');
    }

    public function store(CheckoutFormRequest $request)
    {
        $order = Order::create([
            'code' => "FAC-".\Str::random(6),
            'user_id' => \Auth::id(),
            'amount' =>  intval(\Cart::getSubTotal()),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone1' => $request->phone1,
            'phone2' => $request->phone1,
            'region' => $request->region,
            'ville' => $request->ville,
            'adresse' => $request->adresse
        ]);

        foreach(\Cart::getContent() as $item){
            $order->products()->attach($item->id, ['quantity' => $item->quantity, 'total_price' => ($item->price * $item->quantity)]);
        }

        \Cart::clear();

       $admins = Admin::all();

       foreach($admins as $admin){
           $admin->notify(new NewOrder($order));
       }

        return redirect()->route('check-out.success');
    }
}
