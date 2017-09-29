@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <div class="card-box">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h4 class="m-t-0 header-title"><b>{{(Request::get('val') == 1)?"Positif":"Negatif"}}</b></h4>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>
@endsection

