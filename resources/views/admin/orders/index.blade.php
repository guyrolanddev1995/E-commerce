@extends('admin.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/prism/prism.css') }}">
@endsection
@section('content')
<div class="section-body">
    <div class="row">
     
      <div class="col-12">
        @include('admin.partials.flash')
        <div class="card">
          <div class="card-header">
            <h4>Liste des commandes</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                    <tr class="text-center">
                        <th width="3%"> # </th>
                        <th width="10%">Code</th>
                        <th width="15%">Client</th>
                        <th width="12%">Téléphone</th>
                        <th width="12%">Montant(CFA)</th>
                        <th width="8%">Status</th>
                        <th width="17%">Date de création</th>
                        <th width="3%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $key => $order)
                        <tr class="{{ $order->status == 0 ? 'bg-light' : '' }}">
                            <td class="p-1" width="3%">{{ $key + 1 }}</td>
                            <td class="p-1 text-info">
                                <a href="{{ route('admin.orders.show', $order->code) }}">
                                    {{ $order->code }}
                                </a>
                            </td>
                            <td class="p-1">{{ $order->customer->nom }} {{ $order->customer->prenom }}</td>
                            <td class="p-1">{{ $order->phone1 }}</td>
                            <td class="p-1">{{ $order->amount }} CFA</td>
                            <td class="text-center">
                                @if($order->status == 0)
                                    <span class="badge badge-info text-white">En Attente</span>
                                @elseif($order->status == 1)
                                    <span class="badge badge-success">Validé</span>
                                @endif
                            </td>
                            <td>
                              {{ date('d M Y', strtotime($order->created_at)) }} à {{ date('H:i:s', strtotime($order->created_at)) }}</td>
                            </td>
                            <td class="">
                                <a href="{{ route('admin.orders.show', $order->code) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Voir la commande"><i class="fa btn-icon fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
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