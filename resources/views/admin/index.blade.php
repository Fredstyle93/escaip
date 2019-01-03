@extends('admin/app')

@section('content')



    <p>stats</p>

    <div class="col-md-3">
        <div class="box box-default bg-aqua collapsed-box">
          <div class="box-header with-border">
              <div class="row">
                <div class="col-md-6 info-box">

                    <div class="inner">
                            <h3>150</h3>
              
                            <p>Users</p>
                          </div>
                </div>
                        <div class="col-md-6">

                            <div class="icon">
                                  <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                        </div>
              </div>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

@endsection