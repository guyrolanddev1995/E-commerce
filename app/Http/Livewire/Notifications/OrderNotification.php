<?php

namespace App\Http\Livewire\Notifications;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Support\Carbon;
use Livewire\Component;

class OrderNotification extends Component
{
    public function render()
    {

        $online_products = Product::where('status', "1")
                                    ->count();

        $products_count = Product::count();

        $unreadOrdersCount =  Order::where("status", '0')
                                    ->whereDate('created_at', '=', Carbon::today()->toDateString())
                                    ->count();
        
        $ordersCount = Order::count();

        $stock_epuise = Product::where("quantity", '<=', 'stock')->count();

        $new_users = User::whereDate('created_at', '=', Carbon::today()->toDateString())->count();

        $usersCount = User::count();

       

        $d_stock_epuise = Product::where("quantity", '<=', 'stock')
                                ->whereDate('created_at', '=', Carbon::today()->toDateString())
                                ->count();


        return view('livewire.notifications.order-notification', [
            'unreadOrdersCount' => $unreadOrdersCount,
            'ordersCount' => $ordersCount,
            'stock_epuise' => $stock_epuise,
            'new_users' => $new_users,
            'usersCount' => $usersCount,
            'online_products' => $online_products,
            'products_count' => $products_count,
            'd_stock_epuise'=> $d_stock_epuise
        ]);
    }
}
