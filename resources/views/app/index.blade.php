@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <div class="card-box">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h4 class="m-t-0 header-title"><b>{{$question->question}}</b></h4>
                    <form role="form">
                        <a href="{{$yes}}" class="btn btn-primary">Iya</a>
                        <a href="{{$no}}" class="btn btn-danger">Tidak</a>
                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>
@endsection
