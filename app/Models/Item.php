<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function board() :BelongsTo
    {
        return $this->belongsTo(Board::class);
    }

    public function assigned() :HasMany
    {
        return $this->hasMany(Assigned::class);
    }

    public function members() :HasMany
    {
        return $this->hasMany(Member::class);
    }
    public function badge() :BelongsTo
    {
        return $this->belongsTo(Badge::class);
    }
}
