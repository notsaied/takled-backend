<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function webhook(Request $request)
    {

        $data = $request->all();

        $userId = $data['message']['from']['id'];

        $botToken = '7853332917:AAEfxvHBIWOwa4Xyx8rU80gE4SRQg0KPgZA';

        $chatId = $userId;

        $message = "Hello, " . $data['message']['from']['first_name'] . "\nI will send your id Please copy and send it to admin \n" ;

        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

        Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);


        Http::post($url, [
            'chat_id' => $chatId,
            'text' => $userId,
        ]);
    }
}
