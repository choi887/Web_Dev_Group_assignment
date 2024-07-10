<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transportation extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'name',
        'type',
        'date',
        'phone_number',
    ];
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
