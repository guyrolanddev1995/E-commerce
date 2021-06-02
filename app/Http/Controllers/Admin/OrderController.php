<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;
use App\Product;
use Illuminate\Http\Request;
use PDF;

class OrderController extends BaseController
{
    protected $orderRepositorty;

    public function __construct(OrderContract $orderRepositorty)
    {
        $this->orderRepositorty = $orderRepositorty;
    }

    public function index()
    {
        $orders = $this->orderRepositorty->listOrders();
     
        $this->setPageTitle('Commandes', 'Liste des commandes');
        return view('admin.orders.index', compact('orders'));
    }

    public function show(string $code)
    {
        $order = $this->orderRepositorty->findOneOrderBy(['code' => $code]);
        $order->load('customer');

        $products = $order->products;

        $this->setPageTitle('Facture','');
        return view('admin.orders.show', compact('order', 'products'));
    }

    public function update($id)
    {
        $order = $this->orderRepositorty->findOrderById($id);
        $order->update(['status' => '1']);

        $products = $order->products;

        foreach($products as $item)
        {
           $product = Product::find($item->id);
           $quantity = $item->pivot->quantity;
           
           $product->update([
               'quantity' => $product->quantity - $quantity
           ]);
        }

        return redirect()->back()->with('success', 'Commande validée avec succès');
    }

    public function printPDF($code)
    {
        $order = $this->orderRepositorty->findOneOrderBy(['code' => $code]);
        $order->load('customer');

        $products = $order->products;

        $data = [
            'order' => $order,
            'products' => $products
        ];

        $pdf = \PDF::loadView('pdf.invoce', $data);
        return $pdf->download($order->code.'-'.date('d/m/Y', strtotime($order->created_at)).'.pdf');
    }

    public function invoice($code)
    {
        $order = $this->orderRepositorty->findOneOrderBy(['code' => $code]);
        $order->load('customer');

        $products = $order->products;

        $data = [
            'order' => $order,
            'products' => $products
        ];

        $this->setPageTitle('Facture','');
        return view('admin.orders.invoce', compact('order', 'products'));
    }
}
