<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;

class NotificationContainer extends Component
{
    public function render()
    {
        $notifications = \Auth::guard('admin')->user()->notifications()->orderBy('created_at', 'desc')->get();
        return view('livewire.notifications.notification-container', compact("notifications"));
    }
}
