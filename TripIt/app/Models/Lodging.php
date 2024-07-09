<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lodging extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'zip_code',
        'phone_number',
        'email',
        'description',
    ];
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
