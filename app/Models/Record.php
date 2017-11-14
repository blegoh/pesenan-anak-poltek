<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['user_id','risk'];

    protected $with = ['user.kecamatan'];

    protected $appends = ['resiko'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static $rulesCreate = [
        'risk' => 'required',
    ];

    public static $rulesEdit = [
        'risk' => 'required',
    ];

    public function getResikoAttribute()
    {
        return ($this->risk == 1)?"Resiko Tinggi":"Resiko Rendah";
    }

}
