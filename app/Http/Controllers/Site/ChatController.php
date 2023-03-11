<?php

namespace App\Http\Controllers\Site;

use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ChatRequest;
use App\Http\Resources\Site\ChatResource;
use App\Http\Resources\Site\MessageResource;
use App\Models\Chat;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::where('chat_id',null)
            ->orWhere('sender_id', auth()->user()->id)
            ->where('receiver_id', auth()->user()->id)
            ->get()
            ->unique('chat_id');

        return view('site.chat', compact('chats'));
    }

    public function store(ChatRequest $request)
    {
        $chat = Chat::where('sender_id', auth()->user()->id)
            ->where('receiver_id', $request->receiver_id)
            ->orWhere('receiver_id', auth()->user()->id)
            ->where('sender_id', $request->receiver_id)
            ->first();

        if ($chat) {
            $message = \App\Models\Chat::create([
                'chat_id' => $chat->id,
                'message' => $request->message,
                'sender_id' => auth()->user()->id,
                'receiver_id' => $request->receiver_id,
            ]);

            event(new ChatEvent($message->message, $chat->id));
        } else {

            $chat = \App\Models\Chat::create([
                'message' => $request->message,
                'sender_id' => auth()->user()->id,
                'receiver_id' => $request->receiver_id,
            ]);

            event(new ChatEvent($chat->message, $chat->id));
        }
        return response()->json(['status' => 201]);
    }

    public function messages(Chat $chat)
    {
        return ChatResource::collection(Chat::where('chat_id', $chat->id)->get());
    }
}
