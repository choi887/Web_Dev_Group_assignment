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
        'duration',
        'cover_image_path',
    ];
    public function packageEventsList(): HasMany
    {
        return $this->hasMany(packageEventsList::class);
    }
}
