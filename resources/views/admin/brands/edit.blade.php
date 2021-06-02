@extends('admin.app')

@section('content')
<section class="content-header">
    <h1> 
        #{{ $brand->name }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
      <li class="active">Marques</li>
      <li class="active">{{ $brand->name }}</li>
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
              <h3 class="box-title">Modification de #{{ $brand->name }}</h3>
            </div>
           
            <form action="{{ route('admin.brands.update') }}" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                    <div class="form-group @error('name') has-error @enderror">
                        <label class="control-label" for="name">Nom de la marque <span class="text-danger"> *</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $brand->name) }}"/>
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                        @error('name') 
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                            {{ $message }}
                        </label>
                    @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if($brand->logo != null)
                                <img src="{{ asset('storage/'.$brand->logo) }}" id="logo_preview" style="width: 250px; height: 200px;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logo_preview" style="width: 250px; height: 200px;">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Sélectionner le logo de la marque</label>
                                <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="loadFile(event,'logo_preview')"/>
                                @error('logo') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enregister</button>
                  </div>
              </div>
            </form>
          </div>
          <!-- /.box -->    
        </div>
      </div>
</section>
@endsection

@section('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection 




