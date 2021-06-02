<div class="row mt-4">
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card card-danger">
        <div class="card-header">
          <h4>Les dernieres commandes</h4>
          <div class="card-header-action">
            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i
                class="fas fa-minus"></i></a>
          </div>
        </div>
        <div class="collapse show" id="mycard-collapse">
          <div class="card-body">
            <table class="table table-bordered" wire:poll.5s>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Code</th>
                  <th scope="col" width="25%">Client</th>
                  <th scope="col">Téléphone</th>
                  <th scope="col">Montant</th>
                  <th scope="col" width="17%">Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $key => $order)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <th>
                            <a href="{{  route('admin.orders.show', $order->code) }}">{{ $order->code }}</a>
                        </th>
                        <td>{{ $order->nom }} {{ $order->prenom }}</td>
                        <td>{{ $order->phone1 }}</td>
                        <td>{{ $order->amount }} CFA</td>
                        <td>
                            {{ Carbon\Carbon::parse($order->created_at)->diffForHumans() }}
                        </td>
                    </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
          <div class="card-footer text-center">
            <a href="{{ route('admin.orders.index') }}">Voir plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>