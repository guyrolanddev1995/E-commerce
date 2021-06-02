@extends('admin.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('backend/assets/bundles/select2/dist/css/select2.min.css') }}">
<link href="{{ asset('backend/assets/bundles/lightgallery/dist/css/lightgallery.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12">
        @include('admin.partials.flash')
            <div class="card">
                <div class="card-header">
                  <h4>Modification de #{{ $product->name }}</h4>
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Informations générales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" role="tab"
                        aria-controls="images" aria-selected="false">Gallerie</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="{{ route('admin.products.update') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">Nom du produit <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $product->name) }}"/>
                                @error('name') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
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
                                            value="{{ old('sku', $product->sku) }}"
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
                                                @if ($product->brand_id == $brand->id)
                                                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                @else
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endif
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
                                            @foreach($categories as $category)
                                                @php $check = in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : ''@endphp
                                                <option value="{{ $category->id }}" {{ $check }}>{{ $category->name }}</option>

                                                @if(count($category->children) > 0)
                                                    @foreach ($category->children as $child)
                                                        @php $check2 = in_array($child->id, $product->categories->pluck('id')->toArray()) ? 'selected' : ''@endphp
                                                        <option value="{{ $child->id }}"  {{ $check2 }}>- - {{ $child->name }}</option>

                                                        @if(count($child->children) > 0)
                                                            @foreach ($child->children as $item)
                                                                @php $check3 = in_array($item->id, $product->categories->pluck('id')->toArray()) ? 'selected' : ''@endphp
                                                                <option value="{{ $item->id }}" {{ $check3 }}>- - - - {{ $item->name }}</option>
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
                                                value="{{ old('price',$product->price) }}"
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
                                                value="{{ old('sale_price', $product->sale_price) }}"
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
                                                value="{{ old('quantity', $product->quantity) }}"
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
                                                value="{{ old('stock', $product->stock) }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group my-5">
                                            <label class="control-label" for="caracteristique">Caracteristiques du produit</label>
                                            <textarea name="caracteristique" id="caracteristique" class="form-control">{{ old('caracteristique', $product->caracteristique) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group my-5">
                                    <div class="row">
                                        <div class="col-4">
                                            @if ($product->product_image != null)
                                                <img src="{{ asset('storage/'.$product->product_image) }}" id="imagePreview" style="width: 250px; height: 200px;">
                                            @else
                                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="imagePreview" style="width: 250px; height: 200px;">
                                            @endif
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label class="control-label">Image du produit</label>
                                                <input class="form-control" type="file" name="image" onchange="loadFile(event,'imagePreview')"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea name="description" id="description" rows="8" class="form-control">{{ old('description', $product->description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                type="checkbox"
                                                id="status"
                                                name="status"
                                                {{ $product->status == 1 ? 'checked' : '' }}
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
                                                    {{ $product->featured == 1 ? 'checked' : '' }}
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
                                                {{ $product->is_new == 1 ? 'checked' : '' }}
                                                />Definir comme nouveau produit
                                        </label>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Enregistrer le produit</button>
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-danger" type="reset">Retour</a>
                                </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="dropzone" id="dropzone" style="border: 2px dashed rgba(0,0,0,0.3)">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        <div class="row d-print-none mt-2">
                            <div class="col-12 text-right">
                                <button class="btn btn-success" type="button" id="uploadButton">
                                    <i class="fa fa-fw fa-lg fa-upload"></i>Télécharger
                                </button>
                            </div>
                        </div>
                        @if($product->images)
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix mt-5">
                                @foreach($product->images as $image)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="{{ asset('storage/'.$image->full) }}" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="{{ asset('storage/'.$image->full) }}" alt="">
                                           
                                        </a>
                                        <a class="card-link float-right text-danger" href="{{ route('admin.products.images.delete', $image->id) }}">
                                            <i class="fa fa-fw fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa,
                      gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum
                      molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non
                      ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices.
                      Proin bibendum bibendum augue ut luctus.
                    </div>
                  </div>
                </div>
              </div>
            
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/ayxl1uttmdfi98mz9g4snrn3k1td4mwfp19ol92yruhnn9ee/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script src="{{ asset('backend/assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/bundles/lightgallery/dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('backend/assets/js/page/light-gallery.js') }}"></script>
    
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
                'bold italic alignleft aligncenter alignright alignjustify ' +
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
                'bold italic  alignleft aligncenter alignright alignjustify ' +
                ' bullist numlist outdent indent | ' +
                'removeformat | fullscreen help',
                paste_data_images: true,
                automatic_uploads: true,
        });

        let myDropzone = new Dropzone("#dropzone", {
                paramName: 'image',
                addRemoveLinks: false,
                maxFilesize: 4,
                parallelUploads: 2,
                uploadMultiple: false,
                url: "{{ route('admin.products.images.upload') }}",
                autoProcessQueue: false,
            });
            myDropzone.on("queuecomplete", function (file) {
                window.location.reload();
            });

            $('#uploadButton').click(function(){
                if (myDropzone.files.length === 0) {
                   alert('pas cool')
                } else {
                    myDropzone.processQueue();
                }
            });
    </script>
@endsection
