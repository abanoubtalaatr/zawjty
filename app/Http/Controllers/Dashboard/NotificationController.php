<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class NotificationController extends Controller
{
    public function index()
    {
        $unReadNotifications = Notification::where('read_at', null)->where('notifiable_type', 'Admin')->get();

        $unReadNotifications->map(function ($notification) {
            $notification->data = json_decode($notification->data);
        });

        $readNotifications = Notification::whereNotNull('read_at')->where('notifiable_type', 'Admin')->get();

        $readNotifications->map(function ($notification) {
            $notification->data = json_decode($notification->data);
        });

        return view('dashboard.notifications.index', compact('unReadNotifications', 'readNotifications'));
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

    public function showSendNotificationToUser(User $user)
    {
        return view('dashboard.users.send_notification_to_user', compact('user'));
    }

    public function sendNotificationToUser(User $user, Request $request)
    {
        $data['title'] = 'أشعار من الادارة';
        $data['body'] = $request->message;

        \App\Models\Notification::create([
            'id' => Str::uuid()->toString(),
            'type' => "App\Notifications\NotifyUser",
            'notifiable_type' => 'User',
            'notifiable_id' => $user->id,
            'data' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'تــــم ارسال الاشعار بنجاح');

    }
}
