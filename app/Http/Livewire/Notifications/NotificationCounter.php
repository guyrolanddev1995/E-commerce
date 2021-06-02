<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;
use Auth;

class NotificationCounter extends Component
{
    public $counter;

    protected $listeners = ['updateNotificationCounter' => 'NotificationMarkedAsRead'];

    public function updateNotificationCounter($counter){
        dd('hello');
        $this->$counter = $counter;
    }

    public function render()
    {   
        $this->counter =  Auth::guard('admin')->user()->unreadNotifications()->count();

        return view('livewire.notifications.notification-counter');
    }
}
