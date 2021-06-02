@extends('admin.app')
@section('styles')
    
@endsection
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12">
        @include('admin.partials.flash')
        <form action="{{ route('admin.brands.store') }}" method="POST" role="form" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                  <h4>Créer une nouvelle marque</h4>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="name">Nom de la marque<span class="m-l-5 text-danger">*</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                        @error('name') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="https://via.placeholder.com/100x100?text=Placeholder+Image" id="category_preview" style="width:250px; height: 200px;">
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label class="control-label">Sélèctionner le logo de la marque</label>
                                <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="loadFile(event,'category_preview')"/>
                                @error('logo') 
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="online" name="online"/>Mettre en ligne
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit">Enregistrer</button>
                  <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary" type="reset">Retour</a>
                </div>
              </div>
        </form> 
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
