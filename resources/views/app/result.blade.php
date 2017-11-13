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

            <br /><br /><br />

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Kecamatan:</label>
                            <div class="col-sm-10">
                                <select name="kecamatan_id" id="" class="form-control">
                                    @foreach($kecamatans as $kecamatan)
                                        <option value="{{$kecamatan->id}}">{{$kecamatan->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
    </div>
@endsection

