<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Notification;
class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('product');
    }

    public function sendOfferNotification() {
        $userSchema = User::first();

        $offerData = [
            'name' => 'Majd',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
        Notification::send($userSchema, new OffersNotification($offerData));
        dd('Task completed!');
    }
}
