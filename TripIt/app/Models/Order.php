<?php

namespace App\Models;

use App\OrderStatus;
use App\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'order_date',
        'item_id',
        'user_id',
    ];
    protected $casts = [
        'status' => OrderStatus::class,
        'type' => Type::class,
    ];
}
