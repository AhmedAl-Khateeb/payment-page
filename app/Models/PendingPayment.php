<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendingPayment extends Model
{
    protected $table = 'pending_payments';

    protected $fillable = [
        'paymob_order_id',
        'user_id',
        'data',
        'type',
    ];

    protected $casts = [
        'data' => 'array', // تحويل البيانات إلى مصفوفة
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
