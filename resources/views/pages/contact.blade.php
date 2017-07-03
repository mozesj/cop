<!-- contact us-->
<div id="contact">
   <div class="footer1">
   <h3 class="grey">Let's get Intouch</h3>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h1 class="widget-title">Contact</h1>
                        <div class="widget-body">
                            <address>
                            <i class="fa fa-phone fa-3x sr-contact"></i> : +254 (0) 704 - 207 - 449<br><br>
                               <i class="fa fa-envelope-o fa-3x sr-contact"></i> : <a href="mailto:#">fredmancini85@gmail.com</a><br>
                               
                                
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
                        <h1 class="widget-title">Follow Us</h1>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="http://instagram.com//"><i class="fa fa-instagram fa-2"></i></a>
                                <a href="http://googleplus.com//"><i class="fa fa-google-plus fa-2"></i></a>
                                <!--a href="http://linkedin.com//"><i class="fa fa-linkedin-square fa-2"></i></a-->
                                <!--a href="http://youtube.com//"><i class="fa fa-youtube fa-2"></i></a-->
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
                                <div class="col-sm-6">
                               <label class="checkbox"><input type="checkbox" name="check"> Subscribe SMS
                               </label>
                               </div>                      
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary pull-right">Send Message
                                    &nbsp;&nbsp; <i class="fa fa-envelope"></i></button>
                                </div>
                            </form>        
                        </div>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
            <div class="footer2">
            <div class="container">
                <div class="row"><div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                 &copy; <?=date('Y');?>. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                <a href="#">FAQ</a> |
                                <a href="#">Privacy Policy</a> |
                                <a href="#">Terms of use</a>
                            </p>
                        </div>
                    </div>   

                </div> <!-- /row of widgets -->
            </div>
        </div>
        </div>