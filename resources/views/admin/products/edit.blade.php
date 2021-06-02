@extends('admin.app')

@section('content')
<div>
    <section class="content-header">
        <h1> 
           Modification de #{{ $product->name }}
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
          <li class="active">produits</li>
          <li class="active">{{ $product->name }}</li>
        </ol>
    </section>
    
      <!-- Main content -->
    <section class="content container-fluid" style="margin-top:30px">
        @include('admin.partials.flash')
        
        <div class="row mt-4">
            <!-- left column -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab">Information générales</a></li>
                      <li><a href="#tab_2" data-toggle="tab">Gallerie du produit</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <form role="form" action="{{ route('admin.products.update') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group @error('name') has-error @enderror">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name" value="{{ old('name', $product->name) }}" placeholder="Entrer le nom du produit">
                                @error('name') 
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
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
                                            value="{{ old('sku', $product->sku) }}"
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
                                                @if ($product->brand_id == $brand->id)
                                                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                @else
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endif
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
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('price') has-error @enderror">
                                        <label for="price">Prix du produit</label>
                                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price',$product->price) }}" id="price" placeholder="Entrer le prix du produit">
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
                                        <input type="text" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" value="{{ old('sale_price', $product->sale_price) }}" placeholder="Entrer le prix spécial du produit">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group @error('quantity') has-error @enderror">
                                        <label for="quantity">Quantité</label>
                                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror " id="quantity"  value="{{ old('quantity', $product->quantity) }}" placeholder="">
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
                                        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"  value="{{ old('stock', $product->stock) }}" id="stock" placeholder="">
                                        
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
                                        <input type="number" step=".01" name="poids" class="form-control @error('poids') is-invalid @enderror" id="poids" value="{{ old('poids', $product->height) }}" placeholder="Entrer le poids du produit">
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
                                <textarea name="caracteristique" id="caracteristique" class="form-control @error('caracteristique') is-invalid @enderror">{{ old('caracteristique', $product->caracteristique) }}</textarea>
                            </div>
    
                            <div class="form-group" style="margin: 50px 0px">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        @if ($product->product_image != null)
                                            <img src="{{ asset('storage/'.$product->product_image) }}" id="imagePreview" style="width: 250px; height: 200px;">
                                        @else
                                            <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="imagePreview" style="width: 250px; height: 200px;">
                                        @endif
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="form-group @error('image') has-error @enderror">
                                            <label class="control-label">Selectionner l'image de couverture du produit</label>
                                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event,'imagePreview')"/>
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
                                <textarea name="description" id="description" rows="8" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                            </div>
                        
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" {{ $product->status == 1 ? 'checked' : '' }} {{ old('status') }}> Mettre le produit en ligne
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_new" {{ $product->is_new == 1 ? 'checked' : '' }}  {{ old('is_new') }}> Definir comme nouvel arrivage
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="featured" {{ $product->featured == 1 ? 'checked' : '' }} {{ old('featured') }}> Definir comme produit en vedette
                                </label>
                            </div>    
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                            </div>
                        </form> 
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="tab_2">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="dropzone" id="dropzone" style="border: 2px dashed rgba(0,0,0,0.3)">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        <div class="row mt-2" style="margin-top: 10px">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success" type="button" id="uploadButton">
                                    <i class="fa fa-fw fa-lg fa-upload"></i>Télécharger
                                </button>
                            </div>
                        </div>
                        @if($product->images)
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix mt-5" style="margin-top: 30px">
                                @foreach($product->images as $image)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="position: relative; margin-bottom: 10px">
                                        <a href="{{ asset('storage/'.$image->full) }}" data-sub-html="{{ $product->name }}">
                                            <img class="img-responsive thumbnail" src="{{ asset('storage/'.$image->full) }}" alt="{{ $product->name }}" style="height: 200px; width:100%">
                                        </a>
                                        <a style="position: absolute; bottom: 0px; right: 10px" class="card-link float-right text-danger" href="{{ route('admin.products.images.delete', $image->id) }}">
                                            <i class="fa fa-fw fa-lg fa-trash"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                      </div>
                    </div>
                    <!-- /.tab-content -->
                  </div>  
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

        $(function () {
            $('.select2').select2()
        });
    </script>
@endsection
