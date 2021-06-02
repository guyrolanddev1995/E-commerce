<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12"  wire:poll.5s>
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Produits en ligne</h5>
                <h2 class="mb-3 font-18">{{ $online_products }}</h2>
                <p class="mb-0">Total <span class="col-green">110</span></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="{{ asset('backend/assets/img/banner/1.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12"  wire:poll.5s>
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Nouvelles commandes</h5>
                <h2 class="mb-3 font-18">{{ $unreadOrdersCount }}</h2>
                <p class="mb-0">Total <span class="col-orange">{{ $ordersCount }}</span></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="{{ asset('backend/assets/img/banner/2.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12"  wire:poll.5s>
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Nouveaux utilisateurs</h5>
                <h2 class="mb-3 font-18">{{ $new_users }}</h2>
                <p class="mb-0">Total inscrits<span class="col-green"> {{ $usersCount }} </span></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12"  wire:poll.5s>
    <div class="card">
      <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
          <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
              <div class="card-content">
                <h5 class="font-15">Stocks épuisés</h5>
                <h2 class="mb-3 font-18">$48,697</h2>
                <p class="mb-0"><span class="col-green">42%</span> Increase</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
              <div class="banner-img">
                <img src="{{ asset('backend/assets/img/banner/4.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>