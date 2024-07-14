<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageEventsList extends Model
{

    use HasFactory;
    protected $table = 'package_events_list';
    protected $fillable = [
        'name',
        'event_id',
        'package_id',
    ];
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
