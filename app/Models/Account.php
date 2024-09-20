<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{

    use HasFactory;
    protected $guarded = [];

    public function email(): HasMany
    {
        return $this->hasMany(Email::class);
    }
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }
};
