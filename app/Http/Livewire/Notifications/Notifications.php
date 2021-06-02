<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;
use Auth;

class Notifications extends Component
{

    public function markAsRead($id)
    {
        $notification = Auth::guard('admin')->user()->unreadNotifications()->find($id);

        if($notification){
            $notification->markAsRead();
            $this->emitTo('NotificationCounter','NotificationMarkedAsRead', Auth::guard('admin')->user()->unreadNotifications()->count());
        }

        return redirect()->route('admin.orders.show', $notification->data['order_code']);
    }

    public function render()
    {
        $notifications = Auth::guard('admin')->user()->notifications()->orderBy('created_at', 'desc')->get();

        return view('livewire.notifications.notifications', compact('notifications'));
    }
}
