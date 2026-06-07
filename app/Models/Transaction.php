<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'order_id',
        'transaction_id',
        'paymob_order_id',
        'amount',
        'status',
        'payment_method',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function PaymentLog()
    {
        return $this->hasMany(PaymentLog::class);
    }
}
