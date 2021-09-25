<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index() {
        Nexmo::message()->send([
            'to' => '+639197599468',
            'from' => 'sender',
            'text' => 'janeyeii00@gmail.com. The verification has been sent to your email.'
        ]);

        echo "Message sent!";
    }
}
