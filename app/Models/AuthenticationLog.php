<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthenticationLog extends Model {

    protected $table = 'authentication_log';

    protected $fillable = [
        'log_id', 'auth_id', 'login_timestamp'
    ];
    
    protected $primaryKey = 'log_id';

    public $timestamps = false;
}