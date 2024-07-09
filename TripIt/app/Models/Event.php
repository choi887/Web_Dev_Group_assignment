<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'food',
        'category_id',
        'transportation_id',
        'lodging_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function transportation(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function lodging(): BelongsTo
    {
        return $this->belongsTo(Lodging::class);
    }
}
