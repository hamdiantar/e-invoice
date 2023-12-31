<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        "number",
        "date",
        "subtotal",
        "total",
        "customer_id",
        "store_id",
    ];

    public function items(): HasMany
    {
     return $this->hasMany(Item::class, 'invoice_id');
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(User::class, 'store_id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
