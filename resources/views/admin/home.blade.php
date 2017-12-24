@extends('layout.layouts')

@section('css')

@endsection

@section('js')
@endsection

@section('slidebar') 
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section 


    class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-middle image">
			<a href="{{route('create_request')}}"><button type="button" class="btn btn-block btn-success">+ THÊM YÊU CẦU</button></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
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
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Việc tôi được giao</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="Viecduocgiao_All.html"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Inprogress</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Feedback</a></li>
			<li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Out Of Date</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
        Trang chủ
		</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
	 
    </section>
@endsection

@section('main')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<center><h1>Chào mừng bạn đến với RequestIT</h1></center>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection