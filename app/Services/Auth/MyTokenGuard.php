<?php

namespace App\Services\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\TokenGuard;
use Illuminate\Contracts\Auth\UserProvider;

class MyTokenGuard extends TokenGuard
{
    public function __construct(UserProvider $provider, Request $request)
    {
        parent::__construct($provider, $request);
        $this->inputKey = 'token_user'; // if you want to rename this, as well
        $this->storageKey = 'token_user';
    }
}