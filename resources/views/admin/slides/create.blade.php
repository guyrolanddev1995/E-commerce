@extends('admin.app')

@section('content')
<section class="content-header">
    <h1> 
       Carousel
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
      <li class="active">carousel</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content container-fluid" style="margin-top:30px">
    @include('admin.partials.flash')
    <div class="row mt-4">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Nouvelle image</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.slide.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group @error('image') has-error @enderror">
                                        <label class="control-label">Importer des images dans le slide</label>
                                        <input class="form-control" type="file" name="image"/>
                                        @error('image') 
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>
                                                {{ $message }}
                                            </label>
                                        @enderror
            
                                        <div style="margin-top: 15px">
                                            <button type="submit" wire:click.prevent='save()' class="btn btn-primary pull-right">
                                                <i class="fa fa-upload" aria-hidden="true"></i>
                                                Importer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Media</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    @if(count($images) > 0)
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 400px">
                        <ol class="carousel-indicators">
                          @foreach($images as $key => $image)
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                          @endforeach
                        </ol>
                        <div class="carousel-inner">
                          @foreach ($images as $image)
                            <div class="item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('storage/carousels/'.$image->url) }}" style="width: 100%; height:400px" alt="First slide">
                            </div>
                          @endforeach
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                    @endif
                </div>
    
                <div class="col-md-12" style="margin-top: 40px">
                    @foreach($images as $image)
                        <div class="col-md-3" style="margin: 20px 0px">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('storage/carousels/'.$image->url) }}" id="carousel-{{ $image->id }}" class="img-fluid" alt="img" width="100%" height="170px">
                                    <a href="{{ route('admin.slide.delete', $image) }}" class="card-link float-right text-danger">
                                        <i class="fa fa-fw fa-lg fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
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