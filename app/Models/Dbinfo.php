<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dbinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'db_name',
        'db_host',
        'db_username',
        'db_password',
        'db_port',
        'db_cluster',
    ];
}
