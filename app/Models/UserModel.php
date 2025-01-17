<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $table = "user";
    protected $fillable = [
        'id',
        'name',
        'age',
        'createAt',
    ];

    use HasFactory;
}
