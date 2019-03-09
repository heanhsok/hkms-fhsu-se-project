@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>15</h3>

            <p>Standard User</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
          <div class="inner">
          <h3>10</h3>

              <p>Premiem User</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
      </div>      
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>1</h3>
            <p>Administrator</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                    <h3>1023</h3>

                    <p>Forum Posts</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-help"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>2536</h3>
                    <p>Forum Answers</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-chatbubbles"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                    <h3>485</h3>
                    <p>Opportunity Posts</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
    </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

  </section>
@endsection