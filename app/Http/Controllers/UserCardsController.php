<?php

namespace App\Http\Controllers;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\RelationController;

class UserCardsController extends RelationController
{
    use DisableAuthorization;
    
    protected $model = User::class;
    protected $relation = 'cards';
}
