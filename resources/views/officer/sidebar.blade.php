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
            <i class="fa fa-bell-o"></i> <span>Notifications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="#"><i class="fa fa-bell-o"></i>Alerts</a></li>
            <li><a href="pages/forms/message.html"><i class="fa fa-envelope"></i>Message Board</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="pages/forms/programs.html">
            <i class="fa fa-group"></i> <span>Programs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="pages/forms/aftercare.html"><i class="fa fa-circle-o"></i>Aftercare</a></li>
             <li><a href="pages/forms/probation.html"><i class="fa fa-circle-o"></i>Probation/CSO</a></li>
             <li><a href="pages/forms/prebail.html"><i class="fa fa-circle-o"></i>Pre-Bail</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Cases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="pages/forms/completion.html"><i class="fa fa-circle-o"></i> Completion</a></li>
             <li><a href="pages/forms/sentence.html"><i class="fa fa-circle-o"></i> Sentence</a></li>
              <li><a href="pages/forms/supervision.html"><i class="fa fa-circle-o"></i>Supervision</a></li>
               <li><a href="pages/forms/intervention.html"><i class="fa fa-circle-o"></i>Intervention</a></li>
                <li><a href="pages/forms/transfer.html"><i class="fa fa-circle-o"></i> Transfer</a></li>
          </ul>
        </li>
        
         <li>
          <a href="pages/forms/reminder.html">
            <i class="fa fa-clock-o"></i> <span>Reminder</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Contact Directory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
          </ul>
        </li>
        <li>
          <a href="pages/forms/contact.html">
            <i class="fa fa-clock-o"></i> <span>Diary  Book</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="member/forms/contribution.html">
            <i class="fa fa-briefcase"></i> <span>Contributions</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->    
          </ul>
        </li>
              
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>