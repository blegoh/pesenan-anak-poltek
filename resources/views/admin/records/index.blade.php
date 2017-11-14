@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <a href="{{route('page.create')}}" class="btn btn-primary">Add</a>
                            <table class="table table-bordered" id="users-table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Kecamatan</th>
                                    <th>Resiko</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            var dt = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('record.data')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'user.name', name: 'user.name'},
                    {data: 'user.kecamatan.name', name: 'user.kecamatan.name'},
                    {data: 'resiko', name: 'resiko', orderable: false, searchable: false, align: 'center'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ]
            });
            var del = function (id) {
                swal({
                        title: "Apakah anda yakin?",
                        text: "Anda tidak dapat mengembalikan data yang sudah terhapus!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Iya!",
                        cancelButtonText: "Tidak!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $.ajax({
                                url: "/record/" + id,
                                method: "DELETE",
                            }).done(function (msg) {
                                dt.ajax.reload();
                                swal("Deleted!", "Data sudah terhapus.", "success");
                            }).fail(function (textStatus) {
                                alert("Request failed: " + textStatus);
                            });
                        } else {
                            swal("Cancelled", "Data batal dihapus", "error");
                        }
                    });
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });
        });
    </script>
@endsection


