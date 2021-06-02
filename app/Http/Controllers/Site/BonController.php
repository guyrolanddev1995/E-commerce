<?php

namespace App\Http\Controllers\Site;

use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonController extends Controller
{
    protected $order;

    public function __construct(OrderContract $orderRepository)
    {
        $this->order = $orderRepository;
    }
    public function index($order)
    {   $order =  $this->order->findOneOrderBy(['code' => $order]);
        return view('site.pages.payement.bon', compact('order'));
    }

    public function printBon($order)
    {
        $order =  $this->order->findOneOrderBy(['code' => $order]);
        $products = $order->products;
        
        $data = [
            'order' => $order,
            'products' => $products
        ];

        $pdf = \PDF::loadView('pdf.bon_comande', $data);

        return $pdf->download('bon-'.date('d/m/Y', strtotime($order->created_at)).'.pdf');
    }
}
