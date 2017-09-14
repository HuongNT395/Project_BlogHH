@extends('admin.layout.index');
@section('content');
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($user as $qluser)
                <tr class="odd gradeX" align="center">
                    <td>{{$qluser->id}}</td>
                    <td>{{$qluser->name}}</td>
                    <td>{{$qluser->email}}</td>
                    <td>
                        @if($qluser->active==1){{'Admin'}}
                        @else{{'User'}}
                        @endif
                    </td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/qluser/xoa/{{$qluser->id}}"> Delete</a></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    @endsection;