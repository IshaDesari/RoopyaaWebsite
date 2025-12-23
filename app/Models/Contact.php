<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Schema;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'subject' => 'string',
        'message' => 'string',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
