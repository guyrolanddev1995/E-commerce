<div wire:poll.5>
    @if(count($notifications) > 0)
        @foreach($notifications as $notification)
            <button wire:click="markAsRead('{{ $notification->id }}')" class="dropdown-item {{ $notification->read_at ? '' : 'bg-light dropdown-item-unread' }}"> 
                <span  class="dropdown-item-icon bg-danger text-white"> <i class="fas fa-shopping-cart"></i></span> 
                <span class="dropdown-item-desc"> 
                    {{ $notification->data['message'] }}
                <span class="time">
                    {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                </span>
                </span>
            </button>
        @endforeach
    @endif
</div>