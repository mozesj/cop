@extends('partials.topbar')

@yield('content')

  <form  method="POST" action="" accept-charset="UTF-8" class="default-form" data-role="form">
   <div class="col-md-4 col-md-offset-4">
         <div class="panel panel-default">
             <div class="panel-heading text-center"><h2>Login</h2></div>
                <div class="panel-body">         
            <div class="form-section ">
                <div class="form-group ">
                    <label for="email_or_mob">Email or Mobile Number</label>
                    <input class="form-control "  placeholder="Enter mail  or 070000000" name="email_or_id" type="text" id="email_or_mob">
                </div>
             <div class="form-group  ">
                    <label for="password">Password</label>
                    <input class="form-control " placeholder="Enter Password" name="password" type="password" value="" id="password">
              </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox"> Remember Me
                      </label>
                  </div>                  
                              
           </div>
            <div class="form-submit-section">
                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </div>
           <br>
         <div class="#">
         <div class="pull-left">
         <b>New Member?  <a href="/index.php/register">Register</a></b> 
         </div>
         <div class="pull-right">
         <b><a href="#recover" >Forgot password</a></b>
          </div>
          </div>
          <br>
          
                </div>
        </div>
   </div>
  
</form>
 
                   
 