<template>
   <div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-shopping-basket"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Produits en ligne</span>
            <span class="info-box-number" v-if="notification">{{ notification.product_stat }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-hourglass-end"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Stock épuisé</span>
            <span class="info-box-number" v-if="notification">{{ notification.stock_epuise }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Vendeurs</span>
            <span class="info-box-number">0</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number" v-if="notification">{{ notification.users_stats }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
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
      window.axios.get('admin/notification/widgets/statistique').then(response => {
        this.notification = response.data
      })
    }
  },

  mounted(){
     setInterval(() => {
        this.getOrderNotifications()
     }, 50000);
  }
}
</script>

<style>

</style>