<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'start_date',
        'end_date',
        'description',
        'cover_image_path',
    ];
    public function packageEventsList(): HasMany
    {
        return $this->hasMany(packageEventsList::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'package_events_list', 'package_id', 'event_id');
    }
}
