@extends('admin.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('backend/assets/bundles/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12">
        @include('admin.partials.flash')
        <form action="{{ route('admin.products.store') }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                  <h4>Informations du produit</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                      <label class="control-label" for="name">Nom du produit <span class="m-l-5 text-danger"> *</span></label>
                      <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                      @error('name') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="sku">Référence du produit</label>
                                <input
                                    class="form-control @error('sku') is-invalid @enderror"
                                    type="text"
                                    placeholder="Entrer le sku du produit"
                                    id="sku"
                                    name="sku"
                                    value="{{ old('sku') }}"
                                />
                                <div class="invalid-feedback">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('sku') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="brand_id">Marque</label>
                                <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                                    <option value="0">Selectionner une marque</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('brand_id') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label" for="categories">Categories</label>
                            <select name="categories[]" id="categories" class="form-control select2" multiple="">
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
                            <div class="invalid-feedback active">
                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('category_id') <span>{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="price">Prix</label>
                                <input
                                    class="form-control @error('price') is-invalid @enderror"
                                    type="text"
                                    placeholder="Entrer le prix du produit"
                                    id="price"
                                    name="price"
                                    value="{{ old('price') }}"
                                />
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="sale_price">Prix special</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Entrer le prix special du produit"
                                    id="sale_price"
                                    name="sale_price"
                                    value="{{ old('sale_price') }}"
                                />
                            </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="quantity">Quantité du produit en stock</label>
                                <input
                                    class="form-control @error('quantity') is-invalid @enderror"
                                    type="number"
                                    placeholder="Entrer la quantité du produit"
                                    id="quantity"
                                    name="quantity"
                                    value="{{ old('quantity') }}"
                                />
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="stock">Seuil de stock du produit</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Entrer le seuil à partir du quel reapprovisionner le stock"
                                    id="stock"
                                    name="stock"
                                    value="{{ old('stock') }}"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group my-5">
                                <label class="control-label" for="caracteristique">Caracteristiques du produit</label>
                                <textarea name="caracteristique" id="caracteristique" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                  <div class="form-group my-md-5">
                      <div class="row">
                          <div class="col-12 col-md-4">
                              <img src="https://via.placeholder.com/100x100?text=Placeholder+Image" id="category_preview" style="width:250px; height: 200px;">
                          </div>
                          <div class="col-12 col-md-8">
                              <div class="form-group">
                                  <label class="control-label">Selectionner l'image de couverture du produit</label>
                                  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event,'category_preview')"/>
                                  @error('image') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea name="description" id="description" rows="8" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="status"
                                   name="status"
                                />Mettre le produit en ligne
                        </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input"
                                       type="checkbox"
                                       id="featured"
                                       name="featured"
                                    />Definir comme produit en vedette
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="is_new"
                                   name="is_new"
                                />Definir comme nouveau produit
                        </label>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                  <h4>Images du produit</h4>
                </div>
                <div class="card-body">
                    <div class="dropzone" id="galerie" style="border: 2px dashed rgba(0,0,0,0.3)"></div>
                </div>
            </div>

            <div class="text-right">
                <button class="btn btn-primary mr-1" type="submit">Enregistrer le produit</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-danger" type="reset">Retour</a>
            </div>
        </form> 
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/ayxl1uttmdfi98mz9g4snrn3k1td4mwfp19ol92yruhnn9ee/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="{{ asset('backend/assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
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
    </script>
@endsection
