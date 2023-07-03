<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello! How can I assist you?');
        });

        $botman->fallback(function (BotMan $bot) {
            $bot->reply("Sorry, I didn't understand. Could you please repeat that?");
        });

        $botman->listen();
    }
}
