<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\Resource;
use App\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    use Resource;

    private $model = Page::class;
    private $view = 'admin.pages';
    private $route = 'page';

    public function __construct()
    {
        $this->middleware('auth');
    }

}
