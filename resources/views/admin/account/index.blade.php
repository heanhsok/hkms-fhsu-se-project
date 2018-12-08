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
                {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="user-account" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

      </div>
    </div>

  </section>
@endsection

@section('script')
{{-- $(function () {
  $('#user-account').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
}) --}}

$('#user-account').DataTable({
  processing: true,
  serverSide: true,
  ajax: '{{ route('admin.account.getaccounts') }}',
  columns: [
      {data: 'id', name: 'id'},
      {data: 'name', name: 'name'},
      {data: 'user_profile.first_name', name: 'user_profile.first_name'},
      {data: 'user_profile.last_name', name: 'user_profile.last_name'},
      {data: 'email', name: 'email'},
      {data: 'role', name: 'role'},
      {{-- {data: 'roles[0].name', name: '<span class="label label-success">roles[0].name</span>'} --}}
      {data: 'action', name: 'action'}
  ]
});

{{-- <span class="label label-success">Approved</span> --}}
@endsection