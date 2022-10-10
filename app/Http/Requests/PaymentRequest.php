<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class PaymentRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'card_id' => 'required|exists:cards,id',
            'shop_id' => 'nullable|exists:shops,id',
            'type' => 'required|in:credit,debit',
            'method' => 'required|in:pos,atm,online',
            'amount' => 'required|number',
            'tax' => 'required|number',
        ];
    }
}