<template>
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Les dernieres commandes</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse">
          <i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="5%">#</th>
              <th>Commande</th>
              <th>Client</th>
              <th>Produits</th>
              <th>Montant</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
             <tr v-for="(order, key) in orders" :key="order.id">
                <td>{{ key + 1 }}</td>
                <td><a :href="'/admin/orders/show/'+order.code">{{ order.code }}</a></td>
                <td>{{ order.nom }} {{ order.prenom }}</td>
                <td>{{ order.products_count }} Items</td>
                <td>{{ order.amount }} CFA</td>
                <td width="15%">
                    {{ order.created_at | moment("from", "now") }}
                </td>
            </tr>  
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
      <a href="/admin/orders" class="btn btn-sm btn-default btn-flat pull-right"
        >Voir toutes les commandes</a
      >
    </div>
    <!-- /.box-footer -->
  </div>
</template>

<script>
export default {
    data(){
      return{
        orders: null
      }
    },

    methods:{
        getLatestOrders(){
            window.axios.get('admin/notification/lastest/orders').then(response => {
                this.orders = response.data
            })
        }
    },

    mounted(){
        this.getLatestOrders()
    }
};
</script>

<style>
</style>