@extends('layout')

@yield('content')

 
 <div class="col-md-4 col-md-offset-4">
         <div class="panel panel-default">
             <div class="panel-heading text-center"><h2>Login</h2></div>
                <div class="panel-body">
                   <form method="POST" action="" accept-charset="UTF-8" class="default-form" data-role="form">

                       
            <div class="form-section ">
                <div class="form-group ">
                    <label for="email_or_mob">E-Mail Address or Mobile Number</label>
                    <input class="form-control " placeholder="Enter yourmail@example.com or 070000000" name="email_or_id" type="text" id="email_or_mob">
                </div>
             <div class="form-group  ">
                    <label for="password">Password</label>
                    <input class="form-control " placeholder="Password" name="password" type="password" value="" id="password">
              </div>
                                    
              <div class="col-md-6 col-md-offset-1">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
              </div>                 
           </div>
            <div class="form-submit-section">
                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </div>
           <br>
         <div class="#">
         <b>New Member? <a href="/register">Register</a></b> <b><a href="#recover" >Forgot password</a></b>
          </div><br>
            </form>
                </div>
        </div>
   </div>
                   
