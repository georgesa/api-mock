<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;

class PaymentsController extends Controller
{
    use DisableAuthorization;
    
    protected $model = Payment::class;
}
