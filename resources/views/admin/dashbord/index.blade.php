@extends('admin.app')

@section('content')
<div class="">
    <section class="content-header">
        <h1> 
            Tableau de bord
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
          <li class="active">nouveau produit</li>
        </ol>
    </section>
    
      <!-- Main content -->
    <section class="content container-fluid" style="margin-top:30px">
        <div class="row ">
            <div class="col-md-12">
                <statistique></statistique>
                <widget-notification></widget-notification>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12">
               <order-widget></order-widget>
            </div>
        </div>
    </section>
</div>
@endsection


