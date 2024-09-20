<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function accounts()
    {
        return $this->belongsToMany(AccountRole::class, 'account_role');
    }
}
