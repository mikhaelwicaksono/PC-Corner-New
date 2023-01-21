<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'request_id',
        'users_id',
        'type',
        'brand',
        'model_code',
        'more_information',
        'img',
        'request_date',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
