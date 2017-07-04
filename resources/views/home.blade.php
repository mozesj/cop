@extends('partials.topbar')
@extends('partials.navbar')
@yield('content')

<body data-spy="scroll" data-target=".navbar" data-offset="60" id="page-top">

<!-- intro -->
<div class="/">
 <div id="cd-intro-background">
           <div class="col-sm-12 col-md-12">
            <div id="intro">
                 <div class="centered-words show-for-small-only">
                     <div class="motto">
                         <span class="red">connect.</span>
                         <span class="black">share.</span> 
                         <span class="green">Empower.</span><br/><br/>
                     </div>
                </div> 
              </div> 
          </div>
          <div class="text-center"><a href="/register" class="btn btn-success ">Register Now </a></div>
      </div>
</div>
<!--about ecp-->
<div id="about">
 <h3 class="grey">Welcome to <span class="span">ecp </span></h3>
            <div class="row">
                
<p class="text-center">ecp is platform that connects community members,faith-based organizations (FBO),community-based organizations (CBOs)<br>,Non-Governmental Organizations (NGOs) and Government Policing Agencies(GPAs)<br>to share information and empower the community at large.
</p>
                <!--reasons to use ecp-->
<h3 class="#">Why use <span class="span">ecp</span></h3>
 <div class="text-center">
               <div class="col-sm-6 col-md-3">
              <h2>
               Efficiency
              </h2>
              <p>
              Its easy and fast.
              </p>
            </div> 
             <div class="col-sm-6 col-md-3">
               <h2>
                Reliable
              </h2>
              <p>
                Provide Resourcefull information.
              </p>
            </div> 
             <div class="col-sm-6 col-md-3">
              <h2>
                Alerts
              </h2>
              <p>Receive sms and email alerts to confirm <br> status.</p>
            </div> 
             <div class="col-sm-6 col-md-3">
              <h2>
               Online Services
              </h2>
              <p>Fill online application forms, submit then receive feedback on Any device .</p>
            </div> 
            </div>
            </div>
       
</div>
<!-- services-->

<!-- end services-->

        <div id="resources">
           <div class="jumbotron text-center" >  
            <h3>Resources</h3><br>
            <div class="row">
                <div class="col-sm-4">
                   <h4><i class="fa fa-shopping-cart"></i> Appeal</h4>
                <div class="hline"></div><br>
                <div class="well">
                      <div class="well" >
                      <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-responsive"  alt="Image">
                        <p>Name : Agweng'</p>
                        <p>Age : 15yrs</p>
                        <p>Category: Medical Appeal </p>
                        <p>Condition Category: </p>
                        <p>Condition Name : </p>
                        <p>Description : </p>
                        <p>Amount: Ksh. 5 Million</p>
                    </div>
            </div>
         <a href="/login" class="btn btn-primary">More Appeals ...</a> 
        
                </div>
                <div class="col-sm-4"> 
                    
         <div class="event-title">
         <h4><i class="fa fa-share-alt"></i> Lost & Found</h4>
      </div>
        <div class="hline"></div><br>
      <div class="well">
                      <div class="well" >
                        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-responsive"  alt="Image">
                        <p>Name : Agweng'</p>
                        <p>Age : 15yrs</p>
                        <p>Status: Missing</p>
                        <p>Gender: Female</p>
                        <p>Area Name : Runda</p>
                        <p>Description : </p>
                        <p>Contact: 0722 145 098</p>
                    </div>
            </div>
        
         <a href="/login" class="btn btn-primary">More Lost & Found ...</a>  
 
                </div>
                
                <div class="col-sm-4">
                    
    <div class="event-title">
         <h4><i class="fa fa-calendar"></i> Events </h4>
      </div>
        <div class="hline"></div><br>
         <div class="well">
                      <div class="well" >
                        <p>Theme : 7TH  ANNUAL INTERNATIONAL CONFERENCE</p>
                        <p>Description : RESEARCH, INNOVATION AND KNOWLEDGE TRANSLATION FOR   COMMUNITY TRANSFORMATION</p>
                        <p>Date : 21/09/2017</p>
                        <p>Venue : KABARAK UNIVERSITY MAIN CAMPUS</p>
                        <p>Time : 08:00 AM - 5:00 PM</p>
                        <p>Entrance Charges : Free </p>
                    </div>
            </div>
       
        <br>
         <a href="/login" class="btn btn-primary">More Events ...</a>  
  
                </div>
            </div>
        </div>
        </div>
<!-- end resources-->
<!-- contact us-->
<div id="contact">
   <div class="footer1">
   <h3 class="grey">Let's get Intouch</h3>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                      <h1 class="widget-title">Contact</h1>
                        <div class="widget-body">
                            <address>
                            <i class="fa fa-phone fa-3x sr-contact"></i> :  +254 (0) 704 - 207 - 449<br><br>
                               <i class="fa fa-envelope fa-3x sr-contact"></i> : <a href="mailto:#">  fredmancini85@gmail.com</a><br>
                               
                                
                            </address>
                            <div class="contact-address">
                            <h1 class="widget-title">Address</h1>
                            <address>
                            Machini Technologies,<br>
                            Lakehub - Ground Floor,<br>
                            Neville Road,<br>
                            P.O Box 12 - 0000,<br>
                            Nakuru - Kenya<br>
                          <a href="http://www.machinitech.co.ke/"> www.machinitech.co.ke</a>
                            </address>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h1 class="widget-title">Links</h1>
                        <div class="widget-body">
                            <p class="text">
                            <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Help</a></li>
                            </ul>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h1 class="widget-title">Send a message</h1>
                        <div class="widget-body">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" 
                                    value=" Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" value="Email *"
                                    value=" Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" value="Subject *"
                                    onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Type your message here ...." ></textarea >
                                </div>  
                                                  
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Send Message
                                    &nbsp;&nbsp; <i class="fa fa-envelope"></i></button>
                                </div>
                            </form>        
                        </div>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
      
        </div>
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
                                <!--a href="http://instagram.com//"><i class="fa fa-instagram fa-2"></i></a>
                                <a href="http://linkedin.com//"><i class="fa fa-linkedin-square fa-2"></i></a-->
            
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
  