<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class ShopsController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Shop::class;

    public function includes(): array
    {
        return ['payments'];
    }
}
