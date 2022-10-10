<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class UserRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }
}