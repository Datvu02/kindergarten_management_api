<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model
{
    protected $table = "refresh_tokens";
    protected $fillable = ['id', 'user_id', 'token', 'created_at', 'updated_at'];

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }
}