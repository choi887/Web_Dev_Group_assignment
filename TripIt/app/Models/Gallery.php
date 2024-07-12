<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image_path',
        'event_id',
    ];
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
