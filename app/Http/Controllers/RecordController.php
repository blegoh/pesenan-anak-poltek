<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Record;
use Illuminate\Http\Request;
use Datatables;

class RecordController extends Controller
{
    use Resource;

    private $model = Record::class;
    private $view = 'admin.records';
    private $route = 'record';

    public function store(Request $request)
    {
        $this->validate($request, Record::$rulesCreate);
        auth()->user()->update($request->all());
        auth()->user()->records()->create($request->all());
        return redirect('/');
    }

    public function anyData()
    {
        return Datatables::of($this->model::query())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Delete</a>';
                return $del;
            })
            ->make(true);
    }

}
