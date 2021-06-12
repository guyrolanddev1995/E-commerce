@extends('admin.app')
@section('content')
<div>
    <section class="content-header"></section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> FACTURE {{ $order->code }}.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Expédié à:
          <address>
            <strong>{{ $order->nom }} {{ $order->prenom }}</strong><br>
            {{ $order->adresse }}<br>
            {{ $order->region }}, {{ $order->ville }}<br>
            Phone: {{ $order->phone1 }}, {{ $order->phone2 }}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Facture {{ $order->code }}</b><br>
          <br>
          <b>Date de commande:</b> {{ date('d/m/Y', strtotime($order->updated_at)) }}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Article</th>
              <th class="text-center">Prix unitaire</th>
              <th class="text-right">Prix total</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                  <tr>
                    <td class="text-center">{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->name }}</td>
                    <td class="text-center">{{ $product->price }} XOF</td>
                    <td class="text-right">{{ $product->pivot->total_price }} XOF</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 pull-right">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Total:</th>
                <td class="text-right">{{ $order->amount }} XOF</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>

      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ route('admin.orders.printPDF', $order->code) }}" type="button" class="btn btn-success pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Télécharger la facture
          </a>
          <a href="{{ route('admin.orders.index') }}" class="btn btn-default" style="margin-right: 5px;">
            <i class="fa fa-arrow-left"></i> Retour
          </a>
        </div>
      </div>
      <!-- /.row -->
    </section>
</div>
@endsection