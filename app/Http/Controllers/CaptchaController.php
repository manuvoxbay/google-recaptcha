<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Captcha;
use Validator;

class CaptchaController extends Controller
{
    public function index()
    {
        return view('captcha');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => new Captcha()
        ]);

        return "Validation success";
       
    }
}
