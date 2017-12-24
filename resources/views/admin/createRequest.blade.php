@extends('layout.layouts')

@section('css')

@endsection

@section('js')
@endsection

@section('slidebar') 
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-middle image">
      <a href="CreateRequest.html"><button type="button" class="btn btn-block btn-success">+ THÊM YÊU CẦU</button></a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Việc tôi yêu cầu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="Viecyeucau_All.html"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="Viecyeucau_New.html"><i class="fa fa-circle-o"></i> New</a></li>
      <li><a href="Viecyeucau_Inprogress.html"><i class="fa fa-circle-o"></i> Inprogress</a></li>
      <li><a href="index2.html"><i class="fa fa-circle-o"></i> Resolved</a></li>
      <li><a href="index2.html"><i class="fa fa-circle-o"></i> Out Of Date</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Công việc liên quan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Vieclienquan_All.html"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Inprogress</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Resolved</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Out Of Date</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
@endsection

@section('main')
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Request</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
      <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Tên công việc</label>
                  <input type="text" class="form-control" id="inputWork" placeholder="Tên công việc">
                </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="level">Mức độ ưu tiên</label>
                <select class="form-control border-input" id="sel1">
                  <option>Thấp</option>
                  <option>Bình thường</option>
                  <option>Cao</option>
                  <option>Khẩn cấp</option>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Ngày hết hạn</label>
              <input type="date" class="form-control" id="inputDate" placeholder="Enter work">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Bộ phận IT</label>
                <select class="form-control border-input" id="sel1">
                  <option>Hanoi-IT</option>
                  <option>Danang-IT</option>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Người liên quan</label>
              <input type="text" class="form-control" id="inputName">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="comment">Nội dung</label>
          <textarea class="form-control" rows="5" id="mainwork"></textarea>
        </div> 
                <div class="form-group">
                  <label for="inputFile">File input</label>
                  <input type="file" id="inputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
        
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="creAcc" class="btn btn-primary">Submit</button>
                <button type="submit" id="canAcc" class="btn btn-primary">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
@endsection