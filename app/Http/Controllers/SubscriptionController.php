<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     *  creating a new Subscriber.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubscriber(Request $request, $topic)
    {
        $subscription = [];
        if (
            $request->has([
                'url',
            ])
        ) {
            $url = $request->input('url');
            $subscription = new Subscription([
                'url' => $url,
                'topic' => $topic,
            ]);
            $subscription->save();
        } else {
            return response()->json([
                'error' => 'Missing Data',
            ]);
        }
        return response()->json([
            'url' => $url,
            'topic' => $topic,
        ], 200);
    }
}
