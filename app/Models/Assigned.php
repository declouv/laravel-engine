<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assigned extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function item() :BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}