<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public static $rulesCreate = [
        'question' => 'required',
    ];

    public static $rulesEdit = [
        'question' => 'required',
    ];

    protected $fillable = [
        'question','if_yes','if_no','conclusion_yes','conclusion_no'
    ];
}
