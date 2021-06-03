@extends('admin.app')

@section('content')
<div>
    <section class="content-header">
        <h1>
          Les produits
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
          <li class="active">liste des produits</li>
        </ol>
      </section>
    
      <!-- Main content -->
      <section class="content container-fluid" style="margin-top:30px">
        @include('admin.partials.flash')
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Liste des produits</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Tous les produits</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Stocks épuisés</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                          <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th> Media </th>
                                  <th> Refs </th>
                                  <th> Nom </th>
                                  <th>Prix</th>
                                  <th>Marque</th>
                                  <th>Catégories</th>
                                  <th> Stock </th>
                                  <th> Status </th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($products as $key => $product)
                                      <tr>
                                          <td width="4%">
                                              <img src="{{ asset('storage/products/full/'.$product->product_image) }}" alt="" width="100%" height="50px">
                                          </td>
                                          <td width="5%">{{ $product->sku }}</td>
                                          <td width="15%">{{ $product->name }}</td>
                                          <td width="8%">{{ $product->price }} CFA</td>
                                          <td width="9%">
                                              @if($product->brand()->exists())
                                                  <span class="badge bg-blue">{{ $product->brand->name }}</span>
                                              @else
                                                  Aucune
                                              @endif
                                          </td>
                                          <td width="13%">
                                              @foreach($product->categories as $category)
                                                  <span class="badge bg-green">{{ $category->name }}</span>
                                              @endforeach
                                          </td>                                        
                                          <td class="text-center" width="8%">
                                              @if($product->quantity <= $product->stock)
                                                  <span class="badge bg-red">Stock épuisé</span>
                                              @else
                                                  <span class="badge bg-green">En stock</span>
                                              @endif
                                          </td>
                                          <td class="text-center" width="9%">
                                              @if ($product->status == 1)
                                                  <span class="badge bg-green">En ligne</span>
                                              @else
                                                  <span class="badge bg-red">hors ligne</span>
                                              @endif
                                          </td>
                                          <td width="9.5%">
                                              <div class="btn-group" role="group" aria-label="Second group">
                                                  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Voir le produit"><i class="fa btn-icon fa-eye"></i></a>
                                                  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editer le produit"><i class="fa btn-icon fa-edit"></i></a>
                                                  <a href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer le produit"><i class="fa btn-icon fa-trash"></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                          <table id="example3" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th> Media </th>
                                <th> Refs </th>
                                <th> Nom </th>
                                <th>Prix</th>
                                <th>Marque</th>
                                <th>Catégories</th>
                                <th> Stock </th>
                                <th> Status </th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($stock_epuises as $key => $product)
                                      <tr>
                                          <td width="4%">
                                              <img src="{{ asset('storage/'.$product->product_image) }}" alt="" width="50px" height="40px">
                                          </td>
                                          <td width="5%">{{ $product->sku }}</td>
                                          <td width="15%">{{ $product->name }}</td>
                                          <td width="8%">{{ $product->price }} CFA</td>
                                          <td width="9%">
                                              @if($product->brand()->exists())
                                                  <span class="badge bg-blue">{{ $product->brand->name }}</span>
                                              @else
                                                  Aucune
                                              @endif
                                          </td>
                                          <td width="13%">
                                              @foreach($product->categories as $category)
                                                  <span class="badge bg-green">{{ $category->name }}</span>
                                              @endforeach
                                          </td>                                        
                                          <td class="text-center" width="8%">
                                              @if($product->quantity <= $product->stock)
                                                  <span class="badge bg-red">Stock épuisé</span>
                                              @else
                                                  <span class="badge bg-green">En stock</span>
                                              @endif
                                          </td>
                                          <td class="text-center" width="9%">
                                              @if ($product->status == 1)
                                                  <span class="badge bg-green">En ligne</span>
                                              @else
                                                  <span class="badge bg-red">hors ligne</span>
                                              @endif
                                          </td>
                                          <td width="9.5%">
                                              <div class="btn-group" role="group" aria-label="Second group">
                                                  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Voir le produit"><i class="fa btn-icon fa-eye"></i></a>
                                                  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editer le produit"><i class="fa btn-icon fa-edit"></i></a>
                                                  <a href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Supprimer le produit"><i class="fa btn-icon fa-trash"></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                @endforeach
                              </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                  </div>
                  <!-- /.col -->
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
    
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
</div>
@endsection
@section('scripts')
<script>
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    });

    $('#example3').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    });
</script>
@endsection
