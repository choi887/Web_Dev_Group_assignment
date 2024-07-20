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
        'type',
        'number_pax'
    ];
    protected $casts = [
        'status' => OrderStatus::class,
        'type' => Type::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class, 'item_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'item_id');
    }
}
