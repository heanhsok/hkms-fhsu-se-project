@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
      User Management
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Account</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Registered Date</th>
                <th>Status</th>
                <th>Role</th>
              </tr>
              <tr>
                <td>183</td>
                <td>johndoe</td>
                <td>John</td>
                <td>Does</td>
                <td>johndoe@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td><span class="label label-primary">Standard</span></td>
              </tr>
              <tr>
                <td>184</td>
                <td>stonejohn</td>
                <td>Stone</td>
                <td>John</td>
                <td>stonejohn@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-info ">Pending</span></td>
                <td><span class="label label-warning">Premiem</span></td>
              </tr>
              <tr>
                <td>185</td>
                <td>brucewayn</td>
                <td>Bruce</td>
                <td>Wayne</td>
                <td>brucewayns@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td><span class="label label-danger">Admin</span></td>
              </tr>
              <tr>
                <td>183</td>
                <td>johndoe</td>
                <td>John</td>
                <td>Does</td>
                <td>johndoe@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td><span class="label label-primary">Standard</span></td>
              </tr>
              <tr>
                <td>184</td>
                <td>stonejohn</td>
                <td>Stone</td>
                <td>John</td>
                <td>stonejohn@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-info ">Pending</span></td>
                <td><span class="label label-warning">Premiem</span></td>
              </tr>
              <tr>
                <td>185</td>
                <td>brucewayn</td>
                <td>Bruce</td>
                <td>Wayne</td>
                <td>brucewayns@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td><span class="label label-danger">Admin</span></td>
              </tr>
              <tr>
                <td>184</td>
                <td>stonejohn</td>
                <td>Stone</td>
                <td>John</td>
                <td>stonejohn@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-info ">Pending</span></td>
                <td><span class="label label-warning">Premiem</span></td>
              </tr>
              <tr>
                <td>183</td>
                <td>johndoe</td>
                <td>John</td>
                <td>Does</td>
                <td>johndoe@gmail.com</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td><span class="label label-primary">Standard</span></td>
              </tr>
              
              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
@endsection