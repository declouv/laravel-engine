<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Email extends Model
{
    use HasFactory;
    protected $guarded = ['file-input'];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
