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
            <h3>Détails de la commande</h3>
            <hr>
          </div>
        </div>
        <div class="row">
            <div class="col-12 section-title">Information du client</div>
            <div class="col-md-6">
              <div class="table-responsive">
                <table class="table table-md">
                    <tr>
                        <td width="40%"><strong>Nom</strong>:</td>
                        <td>{{ $order->nom }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Prenom</strong>:</td>
                        <td>{{ $order->prenom }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Téléphone1</strong>:</td>
                        <td>{{ $order->phone1 }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Téléphone2</strong>:</td>
                        <td>{{ $order->phone2 }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Ville</strong>:</td>
                        <td>{{ $order->ville }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Région</strong>:</td>
                        <td>{{ $order->region }}</td>
                    </tr>
                    <tr>
                        <td width="40%"><strong>Adresse de livraison</strong>:</td>
                        <td>{{ $order->adresse }}</td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="table-responsive">
                <table class="table table-md">
                    <tr>
                        <td width="50%"><strong>Numero de commande</strong>:</td>
                        <td><strong>{{ $order->code }}</strong></td>
                    </tr>
                    <tr>
                      <td width="50%"><strong>Date:</strong></td>
                      <td>{{ date('d M Y', strtotime($order->created_at)) }} à {{ date('H:i:s', strtotime($order->created_at)) }}</td>
                    </tr>
                    <tr>
                      <td width="50%"><strong>Status:</strong></td>
                      <td>
                        @if($order->status == 0)
                            <small class="badge badge-info text-white">Commande en Attente</small></b>
                        @elseif($order->status == 1)
                            <small class="badge badge-success text-white">Commande Validée</small></b>  
                        @endif
                      </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="section-title">Récapitulatif de la commande</div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover table-md">
                <tr>
                  <th data-width="40">#</th>
                  <th>Article</th>
                  <th class="text-center">Prix unitaire</th>
                  <th class="text-center">Quantité</th>
                  <th class="text-right">Prix Total</th>
                </tr>

                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="text-center">{{ $product->price }} CFA</td>
                        <td class="text-center">{{ $product->pivot->quantity }}</td>
                        <td class="text-right">{{ $product->pivot->total_price }} CFA</td>
                    </tr>
                @endforeach
              </table>
            </div>
            <div class="row mt-4">
              <div class="col-lg-12 order-end text-right">
                <hr class="mt-2 mb-2">
                <div class="invoice-detail-item">
                  <div class="invoice-detail-name"><strong>Total</strong></div>
                  <div class="invoice-detail-value invoice-detail-value-lg">{{ $order->amount }} CFA</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="text-md-right">
        @if($order->status == 0)
            <a href="{{ route('admin.orders.index') }}" class="btn btn-danger btn-icon icon-left"><i class="fas fa-arrow-left"></i> Retour</a>
            <a href="{{ route('admin.orders.update', $order->id) }}" class="btn btn-success btn-icon icon-left"><i class="fas fa-check"></i> Valider la commande</a>
        @elseif($order->status == 1)
            <a href="{{ route('admin.orders.invoice', $order->code) }}" class="btn btn-danger"><i class="fa fa-print"></i> Générer la facture</a>
        @endif
        
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