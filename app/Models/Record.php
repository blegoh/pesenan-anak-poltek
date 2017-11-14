<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['user_id','risk'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
