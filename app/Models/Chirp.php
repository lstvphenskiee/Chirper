<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];

    // Relationship for user
    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
