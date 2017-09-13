@extends('admin.layout.index');
@section('content');
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Content</th>
                    <th>Like</th>
                    <th>Image</th>
                    <th>User_name</th>
                    <th>Category_name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $p)
                <tr class="odd gradeX" align="center">
                    <td>{{$p->id}}</td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->summary}}</td>
                    <td>{{$p->content}}</td>
                    <td>{{$p->like}}</td>
                    <td><img width="100px" src="upload/tintuc/{{$p->image}}"></td>
                    <td>{{$p->user->name}}</td>
                    <td>{{$p->category->name}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$p->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$p->id}}">Edit</a></td>
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