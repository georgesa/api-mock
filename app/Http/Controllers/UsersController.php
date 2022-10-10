<?php

namespace App\Http\Controllers;

use App\Models\User;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class UsersController extends Controller
{
    use DisableAuthorization;
    
    protected $model = User::class;

    public function includes(): array
    {
        return ['cards', 'payments'];
    }
}
