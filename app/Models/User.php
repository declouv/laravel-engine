<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'plan',
        'active_plan',
        'billing',
        'status',
        'contact',
        'country',
        'order',
        'total_spent',
        'balance',
        'address',
        'img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

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
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'account_role');
    }
}
