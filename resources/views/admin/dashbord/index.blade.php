@extends('admin.app')

@section('content')
<div class="row ">
    <livewire:notifications.order-notification/>
</div>

<livewire:order-widget/>
@endsection