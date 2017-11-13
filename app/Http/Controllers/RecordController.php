<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    use Resource;

    private $model = Record::class;
    private $view = 'admin.question';
    private $route = 'question';
}
