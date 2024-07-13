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
        'phone_number',
        'price',
        'category_id',
        'food',
        'transportation',
        'lodging',
        'cover_image_path',
        'description',
        'start_date',
        'end_date',
        'created_by',

    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
