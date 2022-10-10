<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class CardRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:visa,mastercard,amex',
            'number' => 'required|string',
            'holder' => 'required|string',
            'expiration_date' => 'date|after:today',
        ];
    }
}