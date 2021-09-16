<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageObject extends Model
{
    use HasFactory;


    protected $fillable = [
        'topic',
        'message',
    ];

    protected $hidden = ['created_at', 'id', 'updated_at'];

}
