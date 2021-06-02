@extends('admin.app')
@section('styles')
    
@endsection
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12">
        @include('admin.partials.flash')
        <form action="{{ route('admin.categories.update', $targetCategory) }}" method="POST" role="form" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                  <h4>Mise à jour de  #{{ $targetCategory->name }}</h4>
                </div>
                <div class="card-body">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label class="control-label" for="name">Nom <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                    <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                    @error('name') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label" for="description">Description</label>
                    <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $targetCategory->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="parent">Categorie parente <span class="m-l-5 text-danger"> *</span></label>
                    <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id">
                        <option value="0">Selectionner une catégorie parente</option>
                        @foreach($categories as $key => $category)
                            @if ($targetCategory->parent_id == $key)
                                <option value="{{ $key }}" selected> {{ $category }} </option>
                            @else
                                <option value="{{ $key }}"> {{ $category }} </option>
                            @endif
                        @endforeach
                    </select>
                    @error('parent_id') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mt-5 mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="menu" name="menu" {{ $targetCategory->menu == 1 ? 'checked' : '' }}/>Afficher dans le menu
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="featured" name="featured" {{ $targetCategory->featured == 1 ? 'checked' : '' }}/>Catégorie en vedette
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="display" name="display" {{ $targetCategory->display == 1 ? 'checked' : '' }}/>Lister la catégorie
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group my-5">
                    <div class="row">
                        <div class="col-4">
                            @if ($targetCategory->image != null)
                                <img src="{{ asset('storage/'.$targetCategory->image) }}" id="imagePreview" style="width: 250px; height: 200px;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="imagePreview" style="width: 250px; height: 200px;">
                            @endif
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label class="control-label">Selectionner une image de catégorie</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event,'imagePreview')"/>
                                @error('image') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                  
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit">Mettre à jour</button>
                  <a href="{{ route('admin.categories.index') }}" class="btn btn-danger" type="reset">Retour</a>
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
