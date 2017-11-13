<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['slug','title','image','content'];

    public static $rulesCreate = [
        'title' => 'required',
        'content' => 'required',
    ];

    public static $rulesEdit = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
        $this->attributes['image'] = '';
    }

}
