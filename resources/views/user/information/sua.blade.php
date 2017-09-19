@extends('.layouts.app')
@section('content')
 {{--page content   --}}
 <div class="container">

     <!-- slider -->
     <div class="row carousel-holder">
         <div class="col-md-2">
         </div>
         <div class="col-md-8">
             <div class="panel panel-default">
                 <div class="panel-heading">Thông tin tài khoản</div>
                 <div class="panel-body">

                     @if(count($errors)>0)
                         <div class="alert alert-danger">
                             @foreach($errors->all() as $err)
                                 {{$err}}<br>
                             @endforeach
                         </div>
                     @endif

                     @if(session('thongbao'))
                         <div class="alert alert-success">
                             {{session('thongbao')}}
                         </div>
                     @endif

                     <form action="sua" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="_token" value={{csrf_token()}}>
                         <div>
                             <label>Họ tên</label>
                             <input type="text" class="form-control" placeholder="Username"
                                    name="name" aria-describedby="basic-addon1" value="{{$user->name}}">
                         </div>
                         <br>
                         <div>
                             <label>Email</label>
                             <input type="email" class="form-control" placeholder="Email"
                                    name="email" aria-describedby="basic-addon1" value="{{$user->email}}">
                         </div>
                         <div>
                             <label>Avatar</label>
                             <div>
                                 <img class="img-circle" alt="" width="80" height="70"
                                      src="/storage/images/avartar/{{$user->avatar}}">
                             </div>
                             <div>
                                 <input type="file" class="form"
                                        name="avatar" aria-describedby="basic-addon1"
                                        value="">
                             </div>

                         </div>
                         <br>
                         <div>
                             <label>Đổi mật khẩu</label>
                             <input type="password" class="form-control password"
                                    name="password" placeholder="Nhập mật khẩu">
                         </div>
                         <br>
                         <div>
                             <label>Nhập lại mật khẩu</label>
                             <input type="password" class="form-control password"
                                    name="passwordAgain" placeholder="Nhập lại mật khẩu">
                         </div>
                         <br>
                         <button type="submit" class="btn btn-default">Sửa
                         </button>

                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-2">
         </div>
     </div>
     <!-- end slide -->
 </div>
 <!-- end Page Content -->
@endsection



