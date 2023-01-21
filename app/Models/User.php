<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'users';
    protected $primaryKey = 'users_id';
    protected $fillable = [
        'username',
        'email',
        'phonenumber',
        'address',
        'password',
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

    public  function requests()
    {
        return $this->hasMany(Requests::class);
    }
}