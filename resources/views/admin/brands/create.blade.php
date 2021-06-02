@extends('admin.app')

@section('content')
<section class="content-header">
    <h1> 
        Les marques
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
      <li class="active">les marques</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content container-fluid" style="margin-top:30px">
    @include('admin.partials.flash')
    <div class="row mt-4">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Créer une nouvelle marque</h3>
            </div>
           
            <form action="{{ route('admin.brands.store') }}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group @error('name') has-error @enderror">
                    <label class="control-label" for="name">Nom de la marque<span class="m-l-5 text-danger">*</span></label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                    @error('name') 
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                          {{ $message }}
                      </label>
                  @enderror
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/100x100?text=Placeholder+Image" id="logo_preview" style="width:250px; height: 200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group @error('logo') has-error @enderror">
                            <label class="control-label">Sélectionner le logo de la marque</label>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="loadFile(event,'logo_preview')"/>
                            @error('logo') 
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>
                    </div>
                </div>
               
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="online" id="online" name="online"> <strong>Mettre en ligne</strong>
                    </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregister</button>
              </div>
            </form>
          </div>
          <!-- /.box -->    
        </div>
      </div>
</section>

<section class="content container-fluid" style="margin-top:30px">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Liste des marques</h3>
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
@endsection

@section('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };

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
