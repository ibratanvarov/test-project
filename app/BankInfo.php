<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $fillable = [
        'phone',
        'bank_account',
        'credit_account',
        'card_number',
    ];
}
