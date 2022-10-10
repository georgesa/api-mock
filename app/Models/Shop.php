<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
    ];
    
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
