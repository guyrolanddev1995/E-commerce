<template>
   <div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Commandes <br> enregistrées</span>
            <span class="info-box-number" v-if="notification">{{ notification.order_notify }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>
  
  
          <div class="info-box-content">
            <span class="info-box-text">Commandes <br> en attente</span>
            <span class="info-box-number" v-if="notification">{{ notification.order_wating_notify }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-orange"><i class="fa fa-truck"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Commandes <br> en cour de livraison</span>
            <span class="info-box-number" v-if="notification">{{ notification.order_wating_delivring }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-check-circle-o"></i></span>
  
  
          <div class="info-box-content">
            <span class="info-box-text">Commandes <br> Livrées</span>
            <span class="info-box-number" v-if="notification">{{ notification.order_wating_delivred }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
</div>
</template>

<script>
export default {
  data(){
      return{
         notification: null
      }
  },

  methods:{
    getOrderNotifications(){
      window.axios.get('admin/notification/orders ').then(response => {
        this.notification = response.data
      })
    }
  },

  mounted(){
     this.getOrderNotifications()
     
     setInterval(() => {
        this.getOrderNotifications()
     }, 50000);
  }
}
</script>

<style>

</style>