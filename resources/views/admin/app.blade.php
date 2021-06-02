<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Elleetluiparfum - Tableau de bord</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">

  @yield('styles')

  <livewire:styles />

  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/logo.png') }}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('admin.partials.header')
      @include('admin.partials.sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
        @include('admin.partials.params')
      </div>
      @include('admin.partials.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
  
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

  @yield('scripts')

  <livewire:scripts />
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>