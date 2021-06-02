@extends('admin.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="section-body">
    <div class="row">
     
      <div class="col-12">
        @include('admin.partials.flash')
        <div class="card">
          <div class="card-header">
            <h4>Liste des catégories</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Parent</th>
                    <th>Vedette</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                        @if ($category->id != 1)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->parent->name }}</td>
                                <td class="text-center">
                                    @if ($category->featured == 1)
                                        <span class="badge badge-success">Oui</span>
                                    @else
                                        <span class="badge badge-danger">Non</span>
                                    @endif
                                </td>
                                <td>en ligne</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Modifier"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endif
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
@endsection