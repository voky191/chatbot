<?php

namespace App\Http\Controllers;

use App\Conversations\ExampleConversation;
use App\Http\Controllers\Controller;
use App\Conversations\DefaultConversation;
use BotMan\BotMan\BotMan;

class ConversationController extends Controller
{
    /**
     * Create a new conversation.
     *
     * @param Botman $bot
     * @return void
     */
    public function index($bot)
    {
        // We use the startConversation method provided by botman to start a new conversation and pass
        // our conversation class as a param to it.
        $bot->startConversation(new ExampleConversation());
    }
}