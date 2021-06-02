<template>
     <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
        class="nav-link nav-link-lg message-toggle"><i class="fas fa-bell"></i>
        <span class="badge headerBadge1">
          {{ count }} </span> </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
        <div class="dropdown-header">
          Notifications
          <div class="float-right">
            <a href="#">Marquer comme lus</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          <a href="#" class="dropdown-item dropdown-item-unread" v-for="(notification,index) in notifications" :key="index"> 
            <span class="dropdown-item-icon bg-primary text-white"> 
                  <i class="fas fa-shopping-cart"></i>
            </span> 
            <span class="dropdown-item-desc">
                {{ notification.data.message }}
                <span class="time">2 Min Ago</span>
            </span>
          </a> 
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>
</template>


<script>
export default {
    props:{
        notifications:{
            type: Array
        },
        count:{
            type: Number
        },
        userId:{
            type: Number
        }
    },
    
    mounted(){
        console.log(this.userId)
        Echo.private('private-App.Admin.' + this.userId)
        .notification((notification) => {
            console.log(notification.type);
        });
    }
}
</script>

<style  scoped>
    .fa-bell:before {
        content: "\f0f3";
        color: #555556;
    }
</style>