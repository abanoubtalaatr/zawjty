<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NotificationController extends Controller
{
    public function index()
    {
        $unReadNotifications = Notification::where('read_at', null)->where('notifiable_type', 'User')->get();

        $unReadNotifications->map(function ($notification) {
            $notification->data = json_decode($notification->data);
        });

        $readNotifications = Notification::whereNotNull('read_at')->where('notifiable_type', 'User')->get();

        $readNotifications->map(function ($notification) {
            $notification->data = json_decode($notification->data);
        });

        return view('site.notifications', compact('unReadNotifications', 'readNotifications'));
    }

    public function markAsRead($id)
    {
        Notification::find($id)->update(['read_at' => now()]);
        return back();
    }

    public function readAll()
    {
        $notifications = Notification::all();

        foreach ($notifications as $notification) {
            $notification->update(['read_at' => now()]);
        }

        return back();
    }
}
