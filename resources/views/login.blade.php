 @yield('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">
    <title>{{$title or 'ecp'}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     @include('partials.topbar')
    </head>
    <body style="margin-top:40px;">

  <form  method="POST" action="" accept-charset="UTF-8" class="default-form" data-role="form" class="login">
   <div class="col-md-4 col-md-offset-4 ">
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
  @include('includes.js')
       @yield('js')
    </body>
    </html>  
                   
 