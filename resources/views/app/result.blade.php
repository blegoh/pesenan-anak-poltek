@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <div class="card-box">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h4 class="m-t-0 header-title"><b>Beresiko {{(Request::get('val') == 1)?"Tinggi ":"Rendah "}}Kanker Servik</b></h4>
                </div><!-- end col -->

            </div><!-- end row -->

            <br /><br />

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h3>Isi data diri untuk pendataan</h3>
                    <form class="form-horizontal" method="post" action="{{route('record.store')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="risk" value="{{Request::get('val')}}">
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
                            <label class="control-label col-sm-2" for="pwd">Alamat:</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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

