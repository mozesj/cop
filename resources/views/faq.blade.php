@extends('partials.topbar')

@yield('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>ecp</title>
    <body>
      <div class="main-container"> 
     <!-- BEGIN CONTAINER -->
        <span id="content">		
          <section class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-block">
                                <h4>Frequently Asked Questions</h4>
                            </div>
                        </div>
                        <div class="col-md-8">

                          <div class="text-block">
                              <h5>What is ecp ? </h5>
                              <p>ecp stand for electronic Community Police</p>
                          </div>
                           <div class="text-block">
                              <h5>How do I create an ecp account?</h5>
                              <p> You can sign up for an account or through an agent at Huduma Centre </p>
                          </div> 
                           <div class="text-block">
                              <h5>What ecp DOES ?</h5>
                              <p> Coming Soon </p>
                          </div>
                           <div class="text-block">
                              <h5>What ecp DOES NOT do ?</h5>
                              <p> Coming Soon </p>
                          </div>   
                                    
                        </div>

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
		</span>
        <!-- END CONTAINER -->	

</div> <!-- end main container -->
<footer class="container-fluid ">
        <div class="row">
          <div class="col-md-4">
            <p class="simplenav">
                                 &copy; <?=date('Y');?>. All Rights Reserved.
                            </p>
          </div>
          <div class="col-md-7">
            <div class=" pull-right social-icons ">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="http://googleplus.com//"><i class="fa fa-google-plus fa-2"></i></a>
                                <a href="http://youtube.com//"><i class="fa fa-youtube fa-2"></i></a> 
                                <!--a href="http://instagram.com//"><i class="fa fa-instagram fa-2"></i></a-->
                                <a href="http://linkedin.com//"><i class="fa fa-linkedin-square fa-2"></i></a>
            
                              </div>
                              </div> 
          </div>
                              
        </footer>
        <!-- FOOTER SECTION -->
    <p id="back-top" title="Back to Top">
      <a href="#page-top" class="cd-top btnSwing"><i class="fa fa-angle-up fa-2x"></i></a>
    </p>
   <!-- /Footer -->
</body>
</html>
