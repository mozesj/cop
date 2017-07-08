@extends('partials.topbar')
@yield('content')
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="active treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="forms/adduser.blade.php"><i class="fa fa-circle-o"></i> Add Users</a></li>
             
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>County </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="forms/county.html"><i class="fa fa-circle-o"></i>County</a></li>
             <li><a href="forms/subcounty.html"><i class="fa fa-circle-o"></i>Sub County</a></li>
             <li><a href="forms/constituency.html"><i class="fa fa-circle-o"></i>Constituency</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Courts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="pages/forms/courts.html"><i class="fa fa-circle-o"></i> Add Court</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Probation Office</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="#"><i class="fa fa-circle-o"></i> Add Office</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="pages/forms/stations.html">
            <i class="fa fa-group"></i> <span>Police Stations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
             <li><a href="pages/forms/stations.html"><i class="fa fa-circle-o"></i> Add Station</a></li>
          </ul>
        </li>   
         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Agencies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="pages/forms/agencies.html"><i class="fa fa-circle-o"></i> Add Agencies</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Invalid Logins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          </ul>
        </li>
             <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Generate Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          </ul>
        </li>  
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>