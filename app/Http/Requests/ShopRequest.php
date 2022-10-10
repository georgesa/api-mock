<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class ShopRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'name' => 'required|string',
            'country' => 'required|string',
        ];
    }
}