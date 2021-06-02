@extends('admin.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/prism/prism.css') }}">
@endsection
@section('content')
<div class="section-body">
  @include('admin.partials.flash')
  <div class="invoice">
    <div class="invoice-print">
      <div class="row">
        <div class="col-lg-12">
          <div class="invoice-title">
            <h2>Facture</h2>
            <div class="invoice-number">Commande n °{{ $order->code }}</div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <address>
                <strong>Facturé à:</strong><br>
                elleetluiparfums<br>
                6404 Cut Glass Ct,<br>
                Wendell,<br>
                NC, 27591, USA
              </address>
            </div>
            <div class="col-md-6 text-md-right">
              <address>
                <strong>Expédié à:</strong><br>
                {{ $order->nom }} {{ $order->prenom }}<br>
                {{ $order->phone1 }}, {{ $order->phone2 }}<br>
                {{ $order->adresse }},<br>
                {{ $order->region }}, {{ $order->ville }}
              </address>
            </div>
          </div>

            <div class="col-md-12 text-md-right">
              <address>
                <strong>Date de commande:</strong><br>
                {{ date('d/m/Y', strtotime($order->updated_at)) }} à {{ date('H:m:s', strtotime($order->updated_at)) }}<br><br>
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="section-title">Récapitulatif de la commande</div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-md">
              <tr>
                <th data-width="40">#</th>
                <th>Article</th>
                <th class="text-center">Prix unitaire</th>
                <th class="text-center">Quantité</th>
                <th class="text-right">Prix total</th>
              </tr>
              @foreach ($products as $product)
              <tr>
                <td>1</td>
                <td>{{ $product->name }}</td>
                <td class="text-center">{{ $product->price }} CFA</td>
                <td class="text-center">{{ $product->pivot->quantity }}</td>
                <td class="text-right">{{ $product->pivot->total_price }} CFA</td>
              </tr>
              @endforeach
            </table>
          </div>
          <div class="row mt-4">
            <div class="col-lg-12 text-right">
              <hr class="mt-2 mb-2">
              <div class="invoice-detail-item">
                <div class="invoice-detail-name">Total</div>
                <div class="invoice-detail-value invoice-detail-value-lg">{{ $order->amount }} CFA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="text-md-right">
      <a href="{{ route('admin.orders.printPDF', $order->code) }}" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>Imprimer la facture</a>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('backend/assets/bundles/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/page/datatables.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/prism/prism.js') }}"></script>
@endsection