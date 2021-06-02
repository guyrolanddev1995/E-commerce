{{-- @extends('admin.app')
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
            <h4>Liste des marques</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th >Logo</th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Date de création</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($brands as $key => $brand)
                            <tr>
                                <td width="5%">{{ $key + 1  }}</td>
                                <td width="15%">
                                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="{{ $brand->logo }}" class="img-fluid" width="100%" height="60px">
                                </td>
                                <td>{{ $brand->slug }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>en ligne</td>
                                <td>{{ $brand->created_at }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-primary"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Modifier"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.brands.delete', $brand->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer"><i class="fa fa-trash"></i></a>
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
@endsection --}}

@extends('admin.app')

@section('content')
<div>
    <section class="content-header">
        <h1>
          Les catégories
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
          <li class="active">liste des catégories</li>
        </ol>
      </section>
    
      <!-- Main content -->
      <section class="content container-fluid" style="margin-top:30px">
        @include('admin.partials.flash')
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Liste des catégories</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Logo</th>
                      <th width="50%">Nom</th>
                      <th>Date de création</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brands as $key => $brand)
                        <tr>
                            <td width="5%">{{ $key + 1  }}</td>
                            <td width="15%">
                                <div style="width:100%; display:flex; justify-content:center">
                                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="{{ $brand->logo }}" class="img-fluid" width="75%" height="50px">
                                </div>
                            </td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->created_at }}</td>
                            <td class="text-center">
                              <div class="btn-group" role="group" aria-label="Second group">
                                  <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-primary"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Modifier"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('admin.brands.delete', $brand->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer"><i class="fa fa-trash"></i></a>
                              </div>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
    
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
</div>
@endsection

@section('scripts')
<script>
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    });
</script>
@endsection