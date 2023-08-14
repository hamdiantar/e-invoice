<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        "qty",
        "price",
        "name",
        "total",
        "invoice_id",
    ];

    public $timestamps = false;
}
