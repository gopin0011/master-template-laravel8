<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;
use App\Models\User;
use App\Notifications\TestPusherNotification;

class PusherController extends Controller
{
    public function auth(Request $request)
    {
        $user = auth()->user();
        $socket_id = $request['socket_id'];
        $channel_name = $request['channel_name'];
        $key = env('PUSHER_APP_KEY');
        $secret = env('PUSHER_APP_SECRET');
        $app_id = env('PUSHER_APP_ID');

        if ($user) {
            $pusher = new Pusher($key, $secret, $app_id);
            $auth = $pusher->socket_Auth($channel_name, $socket_id);
            return response($auth, 200);
        } else {
            header('', true, 403);
            echo "Forbidden";
            return;
        }
    }

    public function test()
    {
        $user = User::find(1);
        $user->notify(new TestPusherNotification($user->id , 'someone comment on your post'));
        // die("OK");
        dd('notification sent');
    }
}
