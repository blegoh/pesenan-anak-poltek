@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

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
                            <form class="form-horizontal" method="post"
                                  action="{{route('question.update',['id' => $question->id])}}">
                                {{csrf_field()}}
                                {{method_field('put')}}
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Pertanyaan:</label>
                                    <div class="col-sm-12">
                                        <textarea name="question" id="" cols="30" rows="10"
                                                  class="form-control">{{$question->question}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group" id="ya">
                                    <label class="control-label col-sm-2" for="email">Jika Iya:</label>
                                    <div class="col-sm-12">
                                        <select name="if_yes" id="if_yes" class="form-control">
                                            <option value=""></option>
                                            @foreach($questions as $q)
                                                <option
                                                        @if($q->id == $question->if_yes) selected @endif
                                                value="{{$q->id}}">{{$q->question}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="tidak">
                                    <label class="control-label col-sm-2" for="email">Jika Tidak:</label>
                                    <div class="col-sm-12">
                                        <select name="if_no" id="if_no" class="form-control">
                                            <option value=""></option>
                                            @foreach($questions as $q)
                                                <option
                                                        @if($q->id == $question->if_no) selected @endif
                                                value="{{$q->id}}">{{$q->question}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="conclusion-form">
                                    <label class="control-label col-sm-2" for="email">Kesimpulan Ya:</label>
                                    <div class="col-sm-12">
                                        <select name="conclusion_yes" id="conclusion" class="form-control">
                                            <option value=""></option>
                                            <option @if($question->conclusion_yes == 1) selected @endif value="1">Ya
                                            </option>
                                            <option @if(!is_null($question->conclusion_yes) && $question->conclusion_yes == 0) selected
                                                    @endif value="0">Tidak
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="conclusion-form">
                                    <label class="control-label col-sm-2" for="email">Kesimpulan Tidak:</label>
                                    <div class="col-sm-12">
                                        <select name="conclusion_no" id="conclusion" class="form-control">
                                            <option value=""></option>
                                            <option @if($question->conclusion_no == 1) selected @endif value="1">Ya
                                            </option>
                                            <option @if(!is_null($question->conclusion_no) && $question->conclusion_no == 0) selected
                                                    @endif value="0">Tidak
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection


