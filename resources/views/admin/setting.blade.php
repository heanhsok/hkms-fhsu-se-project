@extends('admin.layouts.app')

@section('content')
<section class="content-header">
        <h1>
          User Setting
        </h1>
      </section>
    
      <!-- Main content -->
      <section class="content">
        
        <div class="row">
          <div class="col-xs-12">


            <div class="box box-danger">
                    
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.changepassword', Auth::user()->id)}}" method="POST">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email:</label>
                          <input type="email" class="form-control" placeholder="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                          <input type="password" name="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-right">Change Password</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.box -->
    
          </div>
        </div>
    
      </section>
@endsection