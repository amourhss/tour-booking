<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'available_dates',
        'destination_id',
        'user_id',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
