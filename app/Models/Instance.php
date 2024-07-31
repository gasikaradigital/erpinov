<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'url', 'status', 'db_name'];
    protected $fillable = ['user_id', 'url', 'status', 'db_name', 'auth_token', 'token_expires_at', 'dolibarr_password'];

    protected $hidden = ['auth_token', 'dolibarr_password'];

    protected $dates = ['token_expires_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isActive()
    {
        return $this->status === 'active';
    }
}
