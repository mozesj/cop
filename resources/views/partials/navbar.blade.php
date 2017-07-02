@yield('content')
<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" >
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
        </button>
</div> 
<a class="logo" href="./">
    <img src="assets/bootstrap/img/ecp.png"  alt="ecp" style="height: 70px; width: 80px;">
  </a>
<!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="cssmenu">
            <ul class="nav navbar-nav navbar-right">
                  <li><a href="./">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#service">Services</a></li>
                  <li><a href="#resources">Resources</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="/register">Register</a></li>
                  <!--li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li-->
            </ul>
        </div><!-- /.navbar-collapse -->
</nav>

