<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $rules = [
            'name' => 'required',
            "email" => "required|email|string",
            "phone" => 'required|min:10|max:12',
            'subject' => 'min:5|max:120',
            "msg" => 'min:5|max:300',
        ];

        $niceNames = [
            'name' => 'nom',
            'email' => 'email adress',
            'phone' => 'telephone',
            'subject' => 'sujet',
            'msg' => 'message',
        ];

        dispatch(function () {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
        });

        $data = $this->validate($request, $rules, [], $niceNames);

        Mail::to('yn-neinaa@hotmail.com')->send(new MyMail($data));
        return response()->json(['success' => "Le message a été envoyé avec succès ^_^"]);
    }
}
