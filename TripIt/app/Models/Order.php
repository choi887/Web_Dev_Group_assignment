<?php

namespace App\Models;

use App\OrderStatus;
use App\Traits\Filterable;
use App\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Filterable;
    protected $table = 'order';
    protected $fillable = [
        'order_date',
        'item_id',
        'user_id',
        'type',
        'number_pax',
        'type',
        'status',
    ];
    protected $casts = [
        'status' => OrderStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->morphTo(__FUNCTION__, 'type', 'item_id');
    }

    public function getTypeAttribute($value)
    {
        $map = [
            'event' => Event::class,
            'package' => Package::class,
        ];

        return $map[$value] ?? $value;
    }

    public function setTypeAttribute($value)
    {
        $map = [
            Event::class => 'event',
            Package::class => 'package',
        ];

        $this->attributes['type'] = $map[$value] ?? $value;
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($order) {
            if ($order->type === Event::class) {
                $event = Event::find($order->item_id);
                if ($event) {
                    $event->increment('current_num_pax', $order->number_pax);
                }
            } elseif ($order->type === Package::class) {
                $package = Package::find($order->item_id);
                if ($package) {
                    $package->increment('current_num_pax', $order->number_pax);
                }
            }
        });
    }
}
