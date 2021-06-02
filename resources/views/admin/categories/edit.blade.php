@extends('admin.app')

@section('content')
<section class="content-header">
    <h1> 
       Nouvelle categorie
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
      <li class="active">nouvelle catégorie</li>
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
              <h3 class="box-title">Créer une nouvelle catégorie</h3>
            </div>
           
            <form role="form" method="post" action="{{ route('admin.categories.update', $category) }}">
              @csrf
              @method('PUT')
              <div class="box-body">
                <div class="form-group">
                    <label for="parent">Categorie Parente <span class="m-l-5 text-danger"> *</span></label>
                    <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id">
                        <option value="0">Selectionner une catégorie parente</option>
                        @foreach($categories as $key => $item)
                            @if($key != $category->id)
                                @if ($category->parent_id == $key)
                                    <option value="{{ $key }}" selected> {{ $item }} </option>
                                @else
                                    <option value="{{ $key }}"> {{ $item }} </option>
                                @endif
                            @endif
                        @endforeach
                    </select>
                    @error('parent_id') {{ $message }} @enderror
                </div>

                <div class="form-group @error('name') has-error @enderror">
                  <label for="name">Le nom de la catégorie</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $category->name) }}" placeholder="Entrer le nom de la catégorie">
                  <input type="hidden" name="id" value="{{ $category->id }}">
                  @error('name') 
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                          {{ $message }}
                      </label>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="niveau">Niveau de la hierachie de la catégorie <span class="m-l-5 text-danger"> *</span></label>
                    <select id=niveau class="form-control custom-select mt-15 @error('niveau') is-invalid @enderror" name="niveau">
                        <option value="1" {{  $category->niveau === '1' ? 'selected' : '' }}>Niveau 1</option>
                        <option value="2" {{  $category->niveau === '2' ? 'selected' : '' }}>Niveau 2</option>
                        <option value="3" {{  $category->niveau === '3' ? 'selected' : '' }}>Niveau 3</option>
                    </select>
                    @error('niveau') {{ $message }} @enderror
                </div>

                <div class="form-group my-5">
                    <div class="row">
                        <div class="col-md-4">
                          @if ($category->image != null)
                              <img src="{{ asset('storage/'.$category->image) }}" id="imagePreview" style="width: 250px; height: 200px;">
                          @else
                              <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="imagePreview" style="width: 250px; height: 200px;">
                          @endif
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Selectionner une image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event,'category_preview')"/>
                                @error('image') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="menu" {{ $category->menu ? 'checked' :  ''}}> <strong>Afficher dans le menu de navigation</strong>
                    </label>
                </div>
                
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="featured"> <strong>Définir comme catégorie populaire</strong>
                    </label>
                </div>
               
                <div class="checkbox">
                    <label>
                    <input type="checkbox" name="status"> <strong>Mettre en ligne</strong>
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
@endsection