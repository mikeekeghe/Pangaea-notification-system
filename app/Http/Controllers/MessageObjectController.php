<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class MessageObjectController extends Controller
{
    public function postMessage(Request $request, $topic)
    {
        if (
            $request->has([
                'message',
            ])
        ) {
            $message = $request->input('message');

            $subscribers = Subscription::where('topic', $topic)->get();
            if (!empty($subscribers)) {
                $message = self::sendMessageToSubscribers($message, $subscribers);
                return response()->json([
                    'status' => $message,
                    'subscribers' => $subscribers,
                ], 200);
            } else {
                $message = "Topic Has No Subscribers";
                return response()->json([
                    'status' => $message,
                ], 400);
            }
        }
    }

    public function sendMessageToSubscribers($the_message, $the_subscribers){
        return "Notifications Sent to Subscribers Succesfully";
    }
}
