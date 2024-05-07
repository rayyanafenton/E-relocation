<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class AzureAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function callback()
    {
        $azureUser = Socialite::driver('azure')->stateless()->user();
        $userEmail =  base64_encode($azureUser->email);
        Session::put('email', $userEmail);
        return redirect()->route('form');
    }
}
