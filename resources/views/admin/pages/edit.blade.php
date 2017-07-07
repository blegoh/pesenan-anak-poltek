@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{route('page.update',['id' => $data->id])}}">
                            {{csrf_field()}}
                            {{method_field('put')}}

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Title:</label>
                                <div class="col-sm-8">
                                    <input name="title" id="" class="form-control" value="{{$data->title}}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Content:</label>
                                <div class="col-sm-8">
                                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$data->content}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection


