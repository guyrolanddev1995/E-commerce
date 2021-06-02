<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
    @if(count($notifications) > 0)
        <div>
            <div class="dropdown-header">
                Notifications
                <div class="float-right">
                <a href="#">Marquer Tout comme lus</a>
                </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons" style="overflow-y: auto">
                <livewire:notifications.notifications/>
            </div>
            <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    @endif
</div>