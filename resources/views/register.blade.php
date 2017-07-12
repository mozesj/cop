
    @yield('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title or 'ecp'}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         @include('partials.topbar')
    </head>
    <body style="margin-top:40px;">
      <form  method="POST" action="" accept-charset="UTF-8" class="default-form" data-role="form" class="registration-form">
      <!-- progressbar -->

       <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default">
                 <div class="panel-heading">
            <div class="container">

                 <div class="stepwizard " >
                           <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                              <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                              <p>Profile</p>
                            </div>
                            <div class="stepwizard-step">
                              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                              <p>Employment</p>
                            </div>
                            <div class="stepwizard-step">
                              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                              <p>Residence</p>
                            </div>
                            <div class="stepwizard-step">
                              <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                              <p>Household</p>
                            </div>
                          </div>   
            </div>
            </div>
                 </div>
        <div class="panel-body">         
                 <div class="row setup-content" id="step-1">
                <div class="col-md-12">
              <h3> Profile</h3><hr>
                <div class="form-group">
                <label class="control-label">Identification</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter National ID or Passport Number"  />
              </div>
                <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">First Name</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" id="fname"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Last Name</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" id="lname"/>
              </div> 
                                </div>
                  </div>
              
                 <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                 <label class="control-label">Mobile Number</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mobile Number" />
              </div>
              <div class="form-group col-md-6 col-sm-6">
               <label class="control-label">Email Address</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email Address" />
              </div> 
                                </div>
                  </div>
                  <div class="form-row">
                  <label>
                    <span>Any Special Need </span>
                     <label class="radio-inline"><input type="radio" name="tab" value="no" onclick="show1();" />
                     No</label>
                     <label class="radio-inline"><input type="radio" name="tab" value="yes" onclick="show2();" />
                    Yes</label>
                  </label>
                  </div>&nbsp;
              <div  id="div1" class="" > <!-- class="hide" check main.css <special need radio button> plus js.blade line 20-27 -->
                <div class="form-group" >
                <label >Special Need Category</label>
               <select class="form-control">
            <option value="select" selected>--select--</option>
            <option value="#">Disability</option>
            <option value="#">Addiction</option>
            <option value="#">Health</option>
            <option value="#">Drugs</option>
            <option value="#">Substance Abuse</option>
             </select>  
                </div>
               
              <div class="form-group">
                <label class="control-label">Specify Special Need</label>
                <textarea required="required" class="form-control" placeholder="Specify Example Addiction e.g Alcohol ,Drug e.g Heroine ,Substance Abuse e.g Bhang , Persons With Disability e.g Physical , Health e.g Cancer" ></textarea>
              </div>
              
             </div>
                   <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Password</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Password"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Confirm Password </label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Confirm Password" />
              </div> 
                                </div>
                  </div>
                 <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">Terms of Use</a>
                </label>
              </div>
            </div>
              <button class="btn btn-success nextBtn btn-block " type="button" value="Next" name="next">Next</button>
            </div>
        </div>
                <div class="row setup-content" id="step-2">
                      <div class="col-md-12">
              <h3> Employment</h3><hr>
              <div class="form-row">
                    <label>
                        <span>Status</span>
                        <label class="radio-inline"><input type="radio" name="optradio">Employed</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Self-Employed</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Unemployed</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Volunteer / Internship</label>
                    </label>
                </div><br>
                 <div class="form-group">
                <label class="control-label">Business / Employee Number</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Business Number or Employee Number" />
              </div>
                <div class="form-bottom">
                                <div class="row">
                <div class="form-group col-md-6 col-sm-6 ">
                <label >Sector</label>
               <select class="form-control">
            <option value="select" selected>--select--</option>
            <option>Government</option>
             <option>Private</option>
             </select>  
                </div>
      
        <div class="form-group col-md-6 col-sm-6">
        <label  >Occupation</label>
        <select class="form-control">
            <option value="select" selected>--select--</option>
        <option>Doctor</option>
        <option>Accountant</option>
        <option>Farmer</option>
        <option>Engineer</option>
        <option>Teacher/Lecturer</option>
        <option>Nutrionist</option>
        <option>Business Person</option>
        <option>Evangelist</option>
        <option>Lawyer</option>
        </select>
        </div>
        </div>
        </div>
              <div class="form-group">
                <label class="control-label">Institution Name</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter institution Name ,Office Block Name or Business Name " />
              </div>
              <div class="form-group">
                <label class="control-label">Building Name</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Building Name ,office Name,Office Block Name or Business Center" />
              </div>
              <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Floor Number</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter floor number"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Room Number</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Room or office number" />
              </div> 
                                </div>
                  </div>
                   <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                 <label class="control-label">Street Name</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter street or road or avenue"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                 <label class="control-label">Postal Address</label>
                <textarea  required="required" class="form-control" placeholder="Enter your postal address e.g P.O BOX 1000-0100 Kenya" ></textarea>
              </div> 
                                </div>
                  </div>
             
               <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Phone Number</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Primary Phone Numbers"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Email Address</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email Address" />
              </div> 
                                </div>
                  </div>
                    <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Fax  Number</label>
                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Fax Numbers"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Website URL</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Website " />
              </div> 
                                </div>
                  </div>
              <button class="btn btn-success nextBtn btn-block" type="button" >Continue</button>
            </div>
        
        </div>
               <div class="row setup-content" id="step-3">
            <div class="col-md-12">
              <h3> Residence</h3><hr>
               <div class="form-group">
        <label  >County</label>
        <select class="form-control">
            <option value="select" selected>--select--</option>
        <option>BARINGO</option>
        <option>BOMET</option>
        <option>BUNGOMA</option>
        <option>BUSIA</option>
        <option>ELGEYO MARAKWET</option>
        <option>EMBU</option>
        <option>GARISSA</option>
        <option>HOMA BAY</option>
        <option>ISIOLO</option>
        <option>KAJIADO</option>
        <option>KAKAMEGA</option>
        <option>KERICHO</option>
        <option>KIAMBU</option>
        <option>KILIFI</option>
        <option>KIRINYAGA</option>
        <option>KISII</option>
        <option>KISUMU</option>
        <option>KITUI</option>
        <option>KWALE</option>
        <option>LAMU</option>
        <option>MACHAKOS</option>
        <option>MAKUENI</option>
        <option>MANDERA</option>
        <option>MERU</option>
        <option>MIGORI</option>
        <option>MARSABIT</option>
        <option>MOMBASA</option>
        <option>MURANG'A</option>
        <option>NAIROBI</option>
        <option>NAKURU</option>
        <option>NANDI</option>
        <option>NAROK</option>
        <option>NYAMIRA</option>
        <option>NYANDARUA</option>
        <option>NYERI</option>
        <option>SAMBURU</option>
        <option>SIAYA</option>
        <option>TAITA TAVETA</option>
        <option>TANA RIVER</option>
        <option>THARAKA NITHI</option>
        <option>TRANS NZOIA</option>
        <option>TURKANA</option>
        <option>UASIN GISHU</option>
        <option>VIHIGA</option>
        <option>WAJIR</option>
        <option>WEST POKOT</option>
        </select>
        </div>
        <div class="form-bottom">
                                <div class="row">
           <div class="form-group col-md-6 col-sm-6">
        <label  >Sub-County</label>
        <select class="form-control">
            <option value="select" selected>--select--</option>
        <option>NAKURU</option>
        <option>NAIVASHA</option>
        <option>GILGIL</option>
        <option>MOLO</option>
        </select>
        </div>    
         <div class="form-group col-md-6 col-sm-6">
        <label  >Constituency</label>
        <select class="form-control">
            <option value="select" selected>--select--</option>
        <option>NAKURU</option>
        <option>NAIVASHA</option>
        <option>GILGIL</option>
        <option>MOLO</option>
        </select>
        </div>   
        </div>
        </div>
      <div class="form-group">
                <label class="control-label">Road Name</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter street or road or avenue name" />
              </div>
              <div class="form-bottom">
                                <div class="row">
               <div class="form-group col-md-6 col-sm-6">
        <label  >Household Type </label>
        <select class="form-control">
            <option value="select" selected>--select--</option>
            <option value="">Estate</option>
            <option value="">Market Center</option>
            <option value="">Apartment</option>
            <option value="">Homestead</option>
            <option value="">Bulla</option>
            <option value="">Manyatta</option>
            <option value="">House</option>
            <option value="">Court</option>
            <option value="">Gated Community</option>
        </select>
        </div>
               
             <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Household / Building Name</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Household Name" />
              </div>
              </div>
              </div>
                <div class="form-bottom">
                                <div class="row">
                                   <div class="form-group col-md-6 col-sm-6">
               <label class="control-label">Building Type</label>
                <select class="form-control">
            <option value="select" selected>--select--</option>
            <option value="">Bungallow</option>
            <option value="">Storey</option>
            
            </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Property Number</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter property or Household number"  />
              </div> 
                                </div>
                  </div>
              <div class="form-bottom">
                                <div class="row">
             <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Floor Number</label>
                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter floor number"  />
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Door Number </label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Door Number " />
              </div>
              </div>
              </div>
              <button class="btn btn-success nextBtn btn-block" type="submit">Next</button>
            </div>
        </div>         
    <div class="row setup-content" id="step-4">
            <div class="col-md-12">
              <h3>Household</h3><hr>
               <div class="form-row">
                    <label>
                        <span>Religion</span>
                        <label class="radio-inline"><input type="radio" name="optradio">Christianity</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Islam</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Hinduism</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Budhism</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Atheist</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Others</label>
                    </label>
                </div><br>
              <div class="form-group">
                <label class="control-label">Cluster Code</label>
                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Code " />
              </div>
              <button class="btn btn-success btn-block" type="submit">Submit</button>
            </div>
        </div>
              </div>
            </div>
       </div>
      
    </form>
      @include('includes.js')
       @yield('js')
    </body>
    </html>                
