@extends('admin.app')

@section('content')
<div>
    <section class="content-header">
        <h1> 
           Nouveau produit
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
          <li class="active">nouveau produit</li>
        </ol>
    </section>
    
      <!-- Main content -->
    <section class="content container-fluid" style="margin-top:30px">
        @include('admin.partials.flash')
        <div class="row mt-4">
            <!-- left column -->
            <div class="col-md-12">
                <form role="form"action="{{ route('admin.products.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Informations</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group @error('name') has-error @enderror">
                            <label for="name">Nom</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name" value='{{ old('name') }}' placeholder="Entrer le nom du produit">
                            @error('name') 
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                    {{ $message }}
                                </label>
                            @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group  @error('sku') has-error @enderror">
                                        <label class="control-label" for="sku">Référence du produit</label>
                                        <input
                                            class="form-control @error('sku') is-invalid @enderror"
                                            type="text"
                                            placeholder="Entrer le sku du produit"
                                            id="sku"
                                            name="sku"
                                            value="{{ old('sku') }}"
                                        />
                                        @error('sku') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('brand_id') has-error @enderror">
                                        <label class="control-label" for="brand_id">Marque</label>
                                        <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                                            <option value="0">Selectionner une marque</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="categories">Categories</label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple="" data-placeholder="Sélectionner les catégories">
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                        @if(count($categorie->children) > 0)
                                            @foreach ($categorie->children as $child)
                                                <option value="{{ $child->id }}">- - {{ $child->name }}</option>
                                                @if(count($child->children) > 0)
                                                    @foreach ($child->children as $item)
                                                        <option value="{{ $item->id }}">- - - - {{ $item->name }}</option>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('price') has-error @enderror">
                                        <label for="price">Prix du produit</label>
                                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="price" placeholder="Entrer le prix du produit">
                                        @error('price') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sale_price">Prix spécial du produit</label>
                                        <input type="text" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price"  value="{{ old('sale_price') }}" placeholder="Entrer le prix spécial du produit">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group @error('quantity') has-error @enderror">
                                        <label for="quantity">Quantité</label>
                                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror " id="quantity" value="{{ old('quantity') }}" placeholder="">
                                        @error('quantity') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="stock">Seuil de stock</label>
                                        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" id="stock" placeholder="">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group @error('min_quantity') has-error @enderror">
                                    <label for="min_quantity">Quantité minimum</label>
                                    <input type="number" name="min_quantity" class="form-control @error('min_quantity') is-invalid @enderror" id="min_quantity" value="{{ old('min_quantity') }}" placeholder="Entrer la quantité mininale">
                                </div>
                            </div>
                                <div class="col-md-3">
                                    <div class="form-group @error('poids') has-error @enderror">
                                        <label for="poids">Poids du produit(kg)</label>
                                        <input type="number" step=".01" name="poids" class="form-control @error('poids') is-invalid @enderror" id="poids" value="{{ old('poids') }}" placeholder="Entrer le poids du produit">
                                        @error('poids') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="control-label" for="caracteristique">Caracteristiques du produit</label>
                                <textarea name="caracteristique" id="caracteristique" class="form-control @error('caracteristique') is-invalid @enderror">{{ old('caracteristique') }}</textarea>
                            </div>
    
                            <div class="form-group" style="margin: 50px 0px">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="https://via.placeholder.com/100x100?text=Placeholder+Image" id="category_preview" style="width:250px; height: 200px;">
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="form-group @error('image') has-error @enderror">
                                            <label class="control-label">Selectionner l'image de couverture du produit</label>
                                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event,'category_preview')"/>
                                            @error('image') 
                                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                    {{ $message }}
                                                </label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="control-label" for="description">Description du produit</label>
                                <textarea name="description" id="description" rows="8" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            </div>
                        
                            <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status"  {{ old('status') }}> Mettre le produit en ligne
                            </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="is_new"  {{ old('is_new') }}> Definir comme nouvel arrivage
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="featured" {{ old('featured') }}> Definir comme produit en vedette
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Galerie photos -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Galerie photos</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="dropzone" id="galerie" style="border: 2px dashed rgba(0,0,0,0.3)"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                </form>   
          </div>
    </section>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/ayxl1uttmdfi98mz9g4snrn3k1td4mwfp19ol92yruhnn9ee/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };

        var urlData = '{{ route('upload-files') }}'
        tinymce.init({
                selector: 'textarea#description',
                height: 300,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime  table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor alignleft aligncenter alignright alignjustify ' +
                '| image  | ' +
                ' bullist numlist outdent indent | ' +
                'removeformat | fullscreen help',
                paste_data_images: true,
                automatic_uploads: true,
                images_upload_handler: function(blobinfo, success, failure){
                    var data = new FormData()
                    data.append('image', blobinfo.blob(), blobinfo.filename())
                    axios.post(urlData, data)
                        .then(function(resp){
                            success(resp.data.url);
                            $('form').append('<input type="hidden" name="media[]" value="'+resp.data.name+'">');
                        })
                        .catch((error) => {
                            debugger
                        } )
                }
        });


        tinymce.init({
                selector: 'textarea#caracteristique',
                height: 200,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime  table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic alignleft aligncenter alignright alignjustify ' +
                ' bullist numlist outdent indent | ' +
                'removeformat | fullscreen help',
                paste_data_images: true,
                automatic_uploads: true,
        });


        var uploadedDocumentMap = {}
        var myDropzone = new Dropzone("div#galerie", { 
            url: "{{ route('upload-dropzoneFiles') }}",
            acceptedFiles: '.png, .jpg, .jpeg, .gif',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="galerie[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                } else {
                        name = uploadedDocumentMap[file.name]
                }

                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: () => {
                @if(isset($project) && $project->document)
                    var files = {!! json_encode($project->document) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="galerie[]" value="' + file.file_name + '">')
                    }
                @endif
            }
        });

        $(function () {
            $('.select2').select2()
        });
    </script>
@endsection

