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
            <h4>Liste des produits</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th> Media </th>
                    <th> Refs </th>
                    <th> Nom </th>
                    <th class="text-center"> Marque </th>
                    <th class="text-center"> Prix </th>
                    <th class="text-center"> Stock </th>
                    <th class="text-center"> Status </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                                <tr>
                                    <td class="5%">
                                        <img src="{{ asset('storage/'.$product->product_image) }}" alt="" width="50px" height="40px">
                                    </td>
                                    <td width="5%">{{ $product->sku }}</td>
                                    <td width="15%">{{ $product->name }}</td>
                                    <td width="15%">
                                        @if($product->brand()->exists())
                                            <span class="">{{ $product->brand->name }}</span>
                                        @else
                                            Aucune
                                        @endif
                                    </td>
                                  
                                    <td width="15%">{{ $product->price }}</td>
                                    
                                
                                    <td class="text-center" width="15%">
                                        @if($product->quantity <= $product->stock)
                                            <span class="badge badge-danger">Stock épuisé</span>
                                        @else
                                            <span class="badge badge-success">En stock</span>
                                        @endif
                                    </td>
                                    <td class="text-center" width="15%">
                                        @if ($product->status == 1)
                                            <span class="badge badge-success">En ligne</span>
                                        @else
                                            <span class="badge badge-danger">hors ligne</span>
                                        @endif
                                    </td>
                                    <td class="">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Voir le produit"><i class="fa btn-icon fa-eye"></i></a>
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editer le produit"><i class="fa btn-icon fa-edit"></i></a>
                                            <a href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer le produit"><i class="fa btn-icon fa-trash"></i></a>
                                        </div>
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