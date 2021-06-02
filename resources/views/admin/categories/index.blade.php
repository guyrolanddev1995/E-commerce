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
                    <th width="5%">#</th>
                    <th>Nom</th>
                    <th>Parent</th>
                    <th width="15%">Niveau Hierachique</th>
                    <th width="10%">status</th>
                    <th width="12%">Date</th>
                    <th width="10%">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $key => $categorie)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $categorie->name }}</td>
                            <td><span class="label label-primary rounded">{{ $categorie->parent->name }}</span></td>
                            <td>
                                @if($categorie->niveau == '2')
                                  <span class="label label-danger rounded">Niveau 2</span>
                                @elseif($categorie->niveau == '3')
                                  <span class="label label-danger rounded">Niveau 3</span>
                                @else
                                  <span class="label label-danger rounded">Niveau 1</span>
                                @endif
                            </td>
                            <td>
                                @if($categorie->menu)
                                  <span class="label label-success rounded">En ligne</span>
                                @else
                                  <span class="label label-danger rounded">Hors ligne</span>
                                @endif
                            </td>
                            <td>{{ $categorie->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.categories.edit', $categorie->slug) }}"  class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.categories.delete', $categorie->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
@endsection