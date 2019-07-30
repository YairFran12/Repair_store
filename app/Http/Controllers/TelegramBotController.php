<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\FileUpload\InputFile;
use TelegramNotifications\Messages\TelegramDocument;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage()
    {
        return view('mensajeTelegram');
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $text = "A new contact us query\n"
            . "<b>Email Address: </b>\n"
            . "$request->email\n"
            . "<b>Message: </b>\n"
            . $request->message;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        return redirect()->back();
    }

    public function sendPhoto()
    {
        return view('photo');
    }

    public function storePhoto(Request $request)
    {

        $photo = $request->file('file');

        Telegram::sendDocument([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'document' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension())
        ]);

        return redirect()->back();
    }
}
