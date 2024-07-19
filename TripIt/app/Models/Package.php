<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    use Filterable;

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
