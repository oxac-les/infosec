    <?php include('inc/header.php') ?>	

     <!-- home page -->
    <div class="marginTop clearfix"></div>

    <div id="form" class="container" style="min-height:600px;"> <!-- page content -->

        <div class="row">	

                <div class="col-md-9">
                    
                    <form class="form-horizontal">
                        <h1>Report an incident</h1>
                        
                        <div class="form-group">
                            <label for="incidenttype" class="col-md-4 control-label">Are you a senior administrator or ITSS?</label>  
                            <div class="col-md-6 select">
                                <select id="selectPers" class="form-control form-select">
                                  <option>Select</option>
                                  <option value="adminstaff">Yes</option>
                                  <option value="nonadminstaff">No</option>
                                </select>
                            </div>
                        </div>
  
<!-- admin or ITSS staff -->
                    <div id="adminstaff" class="hideme">  
                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reporting individual</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="name">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email address</label>
                              <div class="col-md-6">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Date of incident</label>
                              <div class="col-md-6">
                                  <input type="date" class="form-control" id="date">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="techcontact" class="col-md-4 control-label">Technical contact</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="name">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="admincontact" class="col-md-4 control-label">Administrative contact</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="name">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="datatype1" class="col-md-4 control-label">Is personal data at risk?</label> 
                                <div class="radio col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" >Yes
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">No
                                  </label>
                                </div> 
                         </div>
                          <div class="form-group">
                            <label for="datatype2" class="col-md-4 control-label">Is sensitive personal data at risk?</label> 
                                <div class="radio col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" ><span>Yes</span>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2"><span>No</span>
                                  </label>
                                </div> 
                         </div>
                          <div class="form-group">
                            <label for="datatype3" class="col-md-4 control-label">Is other confidential data at risk?</label> 
                                <div class="radio col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1" ><span>Yes</span>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios3" id="optionsRadios2" value="option2"><span>No</span>
                                  </label>
                                </div> 
                         </div>
                        <div class="form-group">
                            <label for="incidenttype" class="col-md-4 control-label">Type of incident</label>  
                            <div class="col-md-6 select">
                                <select id="selectType" class="form-control form-select">
                                  <option>Select</option>
                                  <option value="group1">Malware or virus infection</option>
                                  <option value="group2">Unauthorised access or data breach</option>
                                  <option value="group3">Acceptable use policy breach</option>
                                  <option value="group4">Denial of service</option>
                                  <option value="group5">Physical compromise or data loss</option>
                                  <option value="group6">Credentials exposed</option>
                                  <option value="group7">Not listed here</option>
                                </select>
                            </div>
                        </div>
                    </div>

                               
<!-- non admin or ITSS staff -->
                    <div id="nonadminstaff" class="hideme"> 
                        <h2>[Message asking user to report the incident to your local IT support goes here...]</h2>    
                    </div>
                        
                        
<!-- Malware or virus infection -->
                    <div id="group1" class="hideme">  
                         <div class="formGrp">Malware or virus infection</div>
                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Virus/malware family (if known)</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                              </div>
                          </div>    
                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Users affected</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                              </div>
                          </div>  
                          <fieldset>
                            <legend>Machine details</legend>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Operating system (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">IP Address</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Mac Address (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                      </div>
                                </div>
                                  <div class="form-group">
                                    <label for="preferredcontact" class="col-md-4 control-label">User owned?</label> 
                                        <div class="radio col-md-6">
                                          <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><span>Yes</span>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><span>No</span>
                                          </label>
                                        </div> 
                                 </div>
                            </fieldset>
                    </div>
 
<!-- Unauthorised access or data breach -->
                    <div id="group2" class="hideme">  
                         <div class="formGrp">Unauthorised access or data breach</div>
                          <fieldset>
                            <legend>Machine details</legend>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Operating system (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">IP Address</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Mac Address (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                      </div>
                                </div>
                            </fieldset>
                          <div class="form-group">
                            <label for="preferredcontact" class="col-md-4 control-label">University owned?</label> 
                                <div class="radio col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios4" id="optionsRadios1" value="option1" ><span>Yes</span>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios4" id="optionsRadios2" value="option2"><span>No</span>
                                  </label>
                                </div> 
                         </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Type of service</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="name" >
                              </div>
                        </div>
                    </div>
                        

<!-- Acceptable use policy breach -->
                    <div id="group3" class="hideme">  
                         <div class="formGrp">Acceptable use policy breach</div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Service or policy breached</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="">
                              </div>
                        </div>
                          <fieldset>
                            <legend>Offender details</legend>
                                <div class="form-group">
                                    <label for="sourceip" class="col-md-4 control-label">Source IP (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                      </div>
                                </div>                     
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Name (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" >
                                      </div>
                                </div>                           
                                <div class="form-group">
                                    <label for="username" class="col-md-4 control-label">Username (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" >
                                      </div>
                                </div>                               
                                  <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Other identifier</label>
                                      <div class="col-md-6">
                                        <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                                      </div>
                                  </div> 
                        </fieldset>
                    </div>

 
<!-- denial of service  -->
                    <div id="group4" class="hideme">  
                         <div class="formGrp">Denial of service</div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Service affected</label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="" placeholder="name">
                              </div>
                        </div>
                          <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Duration of incident</label>
                              <div class="col-md-6">
                                 <input type="text" name="daterange" class="form-control"/>
                              </div>
                          </div>
                          <fieldset>
                            <legend>Offender details</legend>
                                <div class="form-group">
                                    <label for="sourceip" class="col-md-4 control-label">Source IP Addresses (if known)</label>
                                      <div class="col-md-6">
                                        <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                                      </div>
                                </div>                     
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Name(s) (if known)</label>
                                      <div class="col-md-6">
                                        <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                                      </div>
                                </div>                           
                                <div class="form-group">
                                    <label for="username" class="col-md-4 control-label">Username(s) (if known)</label>
                                      <div class="col-md-6">
                                        <textarea class="form-control" rows="3" class="form-control" id=""></textarea>
                                      </div>
                                </div>  
                        </fieldset>
                          <fieldset>
                            <legend>Target details</legend>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Operating system (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="name">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">IP Address</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                        <input type="text" class="form-control ipadd" id="name" placeholder="nnn" size="3" maxlength="3">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Mac Address (if known)</label>
                                      <div class="col-md-6">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                        <input type="text" class="form-control macadd" id="name" placeholder="nn" size="2" maxlength="2">
                                      </div>
                                </div> 
                        </fieldset>
                    </div>

                        
<!-- Physical compromise or data loss  -->
                    <div id="group5" class="hideme">  
                         <div class="formGrp">Physical compromise or data loss</div>
                        <div class="form-group">
                            <label for="sourceip" class="col-md-4 control-label">Description of events</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="6" class="form-control" id=""></textarea>
                              </div>
                        </div>                     
                    </div>
                        
 <!-- Credentials exposed -->
                    <div id="group6" class="hideme">  
                         <div class="formGrp">Credentials exposed</div>
                        <div class="form-group">
                            <label for="sourceip" class="col-md-4 control-label">Username(s) exposed</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="6" class="form-control" id=""></textarea>
                              </div>
                        </div>                     
                       <div class="form-group">
                        <label for="preferredcontact" class="col-md-4 control-label">What kind of credentials were exposed?</label> 
                            <div class="checkbox  col-md-6">
                              <label class="checkbox">
                                <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox1" value="option1" ><span>Single sign-on</span>
                              </label>
                              <label class="checkbox">
                                <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox2" value="option2"><span>Remote access</span>
                              </label>
                              <label class="checkbox">
                                <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox3" value="option3" ><span>University System</span>
                              </label>
                              <label class="checkbox">
                                <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox4" value="option4"><span>Other credential</span>
                              </label>
                            </div> 
                        </div>                       
                        <div class="form-group">
                            <label for="sourceip" class="col-md-4 control-label">How were the account(s) compromised?</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="6" class="form-control" id=""></textarea>
                              </div>
                        </div>                               
                    </div>
                        
 <!-- non admin or ITSS staff -->
                    <div id="group7" class="hideme"> 
                        <h2>[Message to redirect user to the contact guidance goes here...]</h2>    
                    </div>
                        
                        
 <!-- form continues -->
                    <div id="commonpart" class="hideme">
                          <div class="form-group">
                            <label for="preferredcontact" class="col-md-4 control-label">Is the issue resolved or ongoing?</label> 
                                <div class="radio col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios5" id="optionsRadios1" value="option1" ><span>Resolved</span>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="optionsRadios5" id="optionsRadios2" value="option2"><span>Ongoing</span>
                                  </label>
                                </div> 
                         </div>
                        <div class="form-group">
                            <label for="sourceip" class="col-md-4 control-label">Mitigating actions taken</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="6" class="form-control" id=""></textarea>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="sourceip" class="col-md-4 control-label">Further details/comments</label>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="6" class="form-control" id=""></textarea>
                              </div>
                        </div>                                   

                        <div class="col-md-9"></div>
                        <div class="col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
                    </div>
                        
                        
                    </form>
                    
                </div>   
            
        </div>
      
 
    </div> <!-- end content container -->  

    

    <?php include('inc/footer.php') ?>	


    <!-- form script-->
	<script type="text/javascript" src="js/formscript.js"></script>
       
    <!-- date range picker -->
      <link rel="stylesheet" type="text/css" media="all" href="daterangepicker/daterangepicker.css" />
      <script type="text/javascript" src="daterangepicker/moment.js"></script>
      <script type="text/javascript" src="daterangepicker/daterangepicker.js"></script>
        
    <script type="text/javascript">
    $(function() {
        $('input[name="daterange"]').daterangepicker();
    });
    </script>