<!DOCTYPE html>
<html lang="en">

<head>
    <style>
     .inputright{
      position:relative;left:580px;
        }  
      .inputright2{
        position:relative;left:530px;
      }
      .inputright3{
        position:relative;left:590px;
    }
    .inputright4{
      position:relative;left:530px;top:-205px;
    }
</style>
  <!-- Required meta tags -->
  <!-- Tabs Start -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- Tabs Ends -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  
  
  <link rel="stylesheet" type="text/css" href="{{ asset('templatedata/vendors/mdi/css/materialdesignicons.min.css') }}" >
 

  <link rel="stylesheet" type="text/css" href="{{ asset('templatedata/vendors/base/vendor.bundle.base.css') }}" >
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  
  
  <link rel="stylesheet" type="text/css" href="{{ asset('templatedata/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" >
    
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  

  <link rel="stylesheet" type="text/css" href="{{ asset('templatedata/css/style.css') }}">

  

  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('templatedata/images/favicon.png')}}" />

 <!-- Starts For MultiSelect Dropdown -->
 <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Ends For Starts For MultiSelect Dropdown -->   
  
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="https://www.pqegroup.com/wp-content/uploads/2018/06/PQEGroup-Logo.png" height="40" width="40" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
      
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('templatedata/images/faces/face5.jpg') }}" class="rounded" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload/resume.html">
              <i class="mdi mdi-upload menu-icon"></i>
              <span class="menu-title">Upload Resume</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/profile/mdi.html">
              <i class="mdi mdi-account-box menu-icon"></i>
              <span class="menu-title">Candidate Profile</span>
            </a>
          </li>
         
          
        </ul>
      </nav>

      <!-- partial -->
 <div class="main-panel">
        <div class="content-wrapper">
          
        <div class="row">
            <div class="col-md-12 grid-margin">
              <!-- <div class="d-flex justify-content-between flex-wrap"> -->
                <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">

                <div style="height:60px;" class="p-3 mb-2 bg-primary text-white">
                        <h4>    
                            Candidate Details (ID: 201900001) 
                        </h4>
                        <button class="btn" style="background-color: #e7e7e7; color: black; position:relative;left:904px;top:-32px;  " onclick="window.location.href='#'">Back</button>
                </div>
                 <div class="row">
            <div class="col-md-50 stretch-card">
              <div class="card" style="width: 65rem;">
                <div class="card-body">
                    
                    <ul class="nav nav-pills" id="myTabMD" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#personaldetails-md" role="tab" aria-controls="personaldetails-md"
                            aria-selected="true">PERSONAL DETAILS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#educationaldetails-md" role="tab" aria-controls="educationaldetails-md"
                            aria-selected="false">EDUCATIONAL DETAILS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#professionaldetails-md" role="tab" aria-controls="professionaldetails-md"
                            aria-selected="false">PROFESSIONAL DETAILS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#additionalskills-md" role="tab" aria-controls="additionalskills-md"
                            aria-selected="false">ADDITIONAL SKILLS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#others-md" role="tab" aria-controls="others-md"
                            aria-selected="false">OTHERS</a>
                        </li>
                    </ul>
                    <form action="#">
                    <div class="tab-content card pt-5" id="myTabContentMD">
                     
                    <!-- Personal Details -->
                    <div class="tab-pane fade show active" id="personaldetails-md" role="tabpanel" aria-labelledby="home-tab-md">
                   
                        <div style="padding-left:10px;padding-right:10px;width:950px;height:570px;border:1px solid #000;position:relative;top:-45px;">
                           <!-- Following Div is for content above table -->
                           <div style="width:940px;height:290px;position:relative;">
                            <fieldse style="position:relative;top:16px;">
                               <b>First Name:&emsp;&emsp;&emsp;&emsp;&ensp;</b><input style="position:relative;" type="text" name="firstname">
                            </fieldset>
                          
                            <fieldset style="position:relative;top:15px;">
                               <b>Last Name:&emsp;&emsp;&emsp;&emsp;&ensp;</b><input type="text" name="lastname">
                            </fieldset>
                              
                            <fieldset style="position:relative;top:30px;">
                               <b>Birth Date:&emsp;&emsp;&emsp; &emsp;&ensp;</b><input type="date" data-date-inline-picker="true" name="birthdate"/>
                            </fieldset>
                            <fieldset style="position:relative;top:80px;">
                                <b> Country:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   </b>
                             
                                <select  name="country" style="width:165px;overflow:hidden;">
                                <option value="Select Country" disabled selected>Select Current Country</option>      
                                <option value="Italy">Italy</option>
                                <option value="India">India</option>
                                </select>
                            </fieldset>
                     
                            <fieldset style="position:relative;top:105px;">
                                <b> Contact Number (Mobile): </b><input type="text" style="position:relative;" name="contactno" style="width:400px;">
                            </fieldset>
                            <fieldset style="position:relative;top:125px;">
                                <b> Sex:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </b>
                                  <input type="radio" name="gender" value="male" checked> Male
                                  <input type="radio" name="gender" value="female"> Female
                                   
                            </fieldset>
                            <fieldset class="inputright" style="top:-142px;">
                               <b>Middle Name:&emsp;</b><input type="text" name="lastname">
                            </fieldset>
                            <fieldset style="top:-120px;" class="inputright">
                                <b> Nationality: &emsp;&ensp;</b>
                             
                                <select  name="nationality" style="width:165px;overflow:hidden;">
                                <option value="Select Nationality" disabled selected>Select Nationality</option>      
                                <option value="Italian">Italian</option>
                                <option value="Indian">Indian</option>
                                </select>
                            </fieldset>
                            <fieldset class="inputright" style="top:-100px;">
                               <b>Address Details:</b><input style="position:relative;height:40px;top:5px;" type="text" name="addressdetails">
                            </fieldset>
                            <fieldset style="top:-78px;" class="inputright">
                                <b> City: &emsp;&emsp;&emsp;&emsp;&emsp;</b>
                             
                                <select  name="city" style="width:165px;overflow:hidden;">
                                <option value="Select City" disabled selected>Select City</option>      
                                <option value="Rome">Rome</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                </select>
                            </fieldset>
                            <fieldset class="inputright" style="top:-60px;">
                               <b>Contact Number <br>(Landline):</b><input style="position:relative;top:-12px;left:45px;" type="text" name="contactnumber">
                            </fieldset>
                            <fieldset class="inputright" style="top:-50px;">
                               <b>Skype Details:&emsp;</b><input style="position:relative; type="text" name="skypedetails">
                            </fieldset>
                          </div>
                          <!-- Content Above table Div Ends Here -->
                            <br>
                            <b>Email:</b><br>
                             <table cellpadding="7" border="1" width="928" >
                                
                                    <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                     
                                        <th style="text-align:center">Emails</th>
                                        <th style="text-align:center;width:135px;">+ </th>
                                     
                                    </tr>
                                    <tr> 
                                        <td>
                                        andrew.john@gmail.com
                                        </td>
                                        <td style="text-align:center"> -  </td>
                                    </tr>
                                    <tr> 
                                        <td>
                                        andrew.john@yahoo.com
                                        </td>
                                        <td style="text-align:center"> -  </td>
                                    </tr>
                                </table>   
                            <!-- Div for content below table Statrs Here -->
                             <div>    
                             <br>             
                              <u>
                             <a href="">Attachment</a>   
                              </u>

                              <fieldset>
                            <b> Browse Resume: </b>
                                 <div class="custom-file" style="position:relative;width:28%;">
                                <input type="file" class="custom-file-input" id="inputresume">
                                <label class="custom-file-label" for="inputresume"></label>
                                </div>
                                <font color="grey">
                                    <small>
                                    <b>Supported Formats:</b>  .pdf, .docx, .doc, .txt
                                    </small>
                                   <p style="position:relative;left:388px;top:-18px;">
                                    <small>
                                    <b>Size: </b>Up to 5 MB
                                    </small>
                                    </p>
                                </font>
                                            
                            </fieldset>
                            <fieldset style="position:relative;left:700px;top:-50px;">
                            <img src="{{asset('templatedata/images/uploadlogo.svg')}}" alt="Smiley face" >
                            andrew_CSVValidator.pdf
                            </fieldset>
                            <fieldset style="position:relative;top:-35px;">
                            <button type="button" class="btn btn-primary float-right">Next</button>
                            </fieldset>
                            <fieldset style="position:relative;top:-70px;">
                            <small>
                            <b>
                            Profile Creation Date: 25/11/2019 10:30 AM Profile Created By: Jenny
                              </b>
                              </small>
                              </fieldset>
                             </div>                     <!-- DIv for Content below table ends here -->     
                          
                    </div>
                  </div>
                  <!-- Educational Details -->
                    <div class="tab-pane fade" id="educationaldetails-md" >     
                      <div style="padding-left:10px;padding-right:10px;width:950px;height:450px;border:1px solid #000;position:relative;top:-45px;">
                        <br>
                        <br>
                        <br>
                        
                        <div style="padding-left:10px;padding-right:10px;padding-top:10px; background-color:#b3b3b3; height:35px;">
                         <b> <h4>Education Detail 1</h4> </b> 
                         <button style="position:relative;left:855px;top:-30px; " onclick="window.location.href='#'"><b>Back</b></button>   
                        </div>
                        <div style="background-color:#DEDEDE; height:150px;padding-left:10px;padding-right:10px;padding-top:10px;">
                       


                          <fieldset style="position:relative;top:10px;">
                                <b> Degree: &emsp;&emsp;&emsp;&emsp;&emsp;</b>
                             
                                <select  name="degree" style="width:165px;overflow:hidden;">
                                <option value="Select Degree" disabled selected>Select Degree</option>      
                                <option value="B.Sc">B.Sc</option>
                                <option value="BE">BE</option>
                                
                                </select>
                            </fieldset>
                            <fieldset style=" position:relative;top:32px;">
                                <b> University/College Name:  </b>
                                <select  name="universityname" style="width:165px;overflow:hidden;">
                                <option value="Select University/College Name" disabled selected>Select University/College Name</option>      
                                <option value="Albanian University">Albanian University</option>
                                <option value="Others">Others</option>
                                        
                                </select>
                            </fieldset>
                            <fieldset style="position:relative;top:51px;">
                                <b> Score/GPA/Percentage: &ensp;</b>
                                <input type="text" name="score">    
                                </select>
                            </fieldset>
                             <fieldset class="inputright2" style="top:-65px;">
                                <b>Specialization: &emsp;&emsp;&emsp;&emsp;&emsp;</b>
                                <select  name="specialization" style="width:165px;overflow:hidden;">
                                <option value="Select Specialization" disabled selected>Select Specialization</option>      
                                <option value="Biochemistry">Biochemistry</option>
                                <option value="Information & Technology">Information & Technology</option>
      
                                </select>
                            </fieldset>
                            <fieldset class="inputright2" style="top:-45px;">
                                <b>Educational Status:<font color="red">*</font> &emsp;&emsp;&ensp;</b>
                                <select  name="educationalstatus" style="width:165px;overflow:hidden;">
                                <option value="Select Educational Status" disabled selected>Select Educational Status</option>      
                                <option value="Passed">Passed</option>
                                <option value="Studying">Studying</option>  
                                </select>
                            </fieldset>
                            <fieldset class="inputright2" style="top:-24px;">
                                <b>From & To:<font color="red">*</font> </b>
                               
                                  <input style="width:135px;" size="5" type="month" id="start" name="end" value="2018-05">
                             
                                  <input style="width:135px;" type="month" id="end" name="end" value="2018-05">
                               
                            </fieldset>
                            
                       </div>
                      <button style="position:relative;top:150px;" type="button" class="float-right btn btn-primary">Next</button>
                       <button style="background-color: #e7e7e7; color: black; position:relative;top:150px;" type="button" class="float-right btn btn-default">Back</button>
                    
                      </div>
                    </div>
                    
                    <!-- Professional Details-->
                    <div class="tab-pane fade" id="professionaldetails-md" > 
                      <div style="padding-left:10px;padding-right:10px;width:950px;height:600px;border:1px solid #000;position:relative;top:-45px;">
                      <div style="padding-left:10px;padding-right:10px;padding-top:10px; height:180px;">

                      <fieldset>
                     <b> <i>Total Exp. (Years): 2 Year 2 Months</i></b>
                      </fieldset>
                      <br>
                      <fieldset>

                      <input type="checkbox" name="vehicle1" value="Bike"> <b>Multi-Country Experience?</b><br>
                      </fieldset> <br>
                      <fieldset>
                                 
                                    <b>Unit:</b><select name="unit" style="width:200px; "class="js-example-basic-multiple"  multiple="multiple">
                                            <option value="Validation">Validation</option>
                                            
                                            </select>
                        </fieldset>  <br>
                        <fieldset>
                                    <b>Department:</b>
                                            <select name="departments" style="width:200px;"class="js-example-basic-multiple"  multiple="multiple">
                                            <option value="Select Department(s)">Select Department(s)</option>                                         
                                            </select>
                        </fieldset>  <br>
                        <fieldset>
                                    <b>Normalized Job Title:</b>
                                            <select name="normalisedjobtitle" style="width:200px;"class="js-example-basic-multiple"  multiple="multiple">
                                            <option value="CSV Manager">CSV Manager</option>                                         
                                            </select>
                        </fieldset>  <br>
                        <fieldset class="inputright4">
                                    <b>LinkedIn Profile Link:</b>
                                            <input type="text" name="linkedInprofilelink" style="width:200px;">
                                            
                        </fieldset>  <br>
                         <fieldset class="inputright4">
                                    <b>Availability to Travel?</b>
                                            <select name="avaliabilitytotravel" style="width:200px;">
                                              <option value="YES" selected>YES</option>        
                                              <option value="No" >No</option> 
                                              <option value="NA" >NA</option>                                  
                                            </select>
                        </fieldset>  <br>
                        <fieldset class="inputright4">
                                    <b>Unit Tag:</b>
                                            <select name="unittag" style="width:200px;"  class="js-example-basic-multiple"  multiple="multiple">
                                              <option value="Select Unit Tag(s)" disabled>Select Unit Tag(s)</option>        
                                              <option value="Compliance">Compliance</option> 
                                  
                                              <option value="Validation">Validation </option>   
                                              <option value="Quality Engineering" >Quality Engineering</option>  
                                              <option value="Regulatory Affairs" >Regulatory Affairs</option>  
                                              <option value="Third Party Audits" >Third Party Audits</option>  
                                              <option value="No Experience">No Experience</option>                                 
                                            </select>
                        </fieldset>  <br>
                        <fieldset class="inputright4">
                                    <b>Department Tag:</b>
                                            <select name="departmenttag" style="width:200px;"class="js-example-basic-multiple"  multiple="multiple">
                                              <option value="Select Department Tags(s)" disabled >Select Department Tags(s)</option>        
                                              <option value="Marketing &amp; Communication" >Marketing &amp; Communication</option> 
                                               
                                              <option value="HR">HR </option>   
                                              <option value="Recruitment" >Recruitment</option>  
                                              <option value="Administration" >Administration</option>  
                                              <option value="IT HW &amp; SW" >IT HW &amp; SW</option>  
                                              <option value="Sales &amp; Business Development">Sales &amp; Business Development</option>                                 
                                            </select>
                        </fieldset>
                      </div>
                      <br>
                      <hr>
                      <a href="templates/home.html" class="btn btn-primary float-right">Add Company</a>
                      <br><br>
                      <br>
                      <div style="padding-left:10px;padding-right:10px;padding-top:10px; background-color:#b3b3b3; height:35px;">
                         <b> <h4>Company 1</h4> </b> 
                         <button style="background-color: #e7e7e7; color: black;position:relative;left:805px;top:-40px; " class="btn btn-default" onclick="window.location.href='#'"><b>Remove</b></button>   
                         <!-- <button style=" position:relative;top:25px;" type="button" class="float-right ">Back</button> -->
                    
                        </div>

                        <div style="background-color:#DEDEDE; height:280px;padding-left:10px;padding-right:10px;padding-top:10px;">
                       
                            <fieldset style="position:relative;top:10px;">
                                <b> Company: </b><input type="text" style="position:relative;" name="company" style="width:400px;">
                            </fieldset>
                            <fieldset style=" position:relative;top:25px;">
                                <b> Job Location/Country:  </b>
                                <select  name="joblocation" style="width:165px;overflow:hidden;">
                                <option value="Select Job Location" disabled selected>Select Job Location</option>      
                                <option value="India">India</option>
                                        
                                </select>
                            </fieldset>
                            <fieldset style="position:relative;top:35px;">
                               <b>Responsibilties :</b><input style="position:relative;height:40px;top:5px;" type="text" name="responsibilities">
                            </fieldset>
                         
                     
                            
                            <fieldset class="inputright3" style="top:-80px;">
                                <b>From :<font color="red">*</font> </b>
                              
                                  <input name="company1from" type="month" id="start" name="end" value="2018-05"> 
                            </fieldset>
                            <fieldset class="inputright3" style="top:-65px;">
                                <b>To :&ensp;&emsp;<font color="red">*</font> </b>
                              
                                  <input name="company1to" type="month" id="start" name="end" value="2018-05"> 
                            </fieldset>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Select Job Title</th>
                                    <th style="text-align:center">Job Title</th>
                                    <th style="text-align:center;width:135px;">+ </th>
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="jobtitle3.1" style="width:405px;overflow:hidden;">
                                               
                                          <option value="CSV Valdiator">CSV Valdiator</option>
                                          <option value="Others">Others</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                        <input style="width:405px;"type="text" name="jobtitle3.2"> 
                                    </td>
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="jobtitle3.1" style="width:405px;overflow:hidden;">
                                               
                                          <option value="CSV Valdiator">CSV Valdiator</option>
                                          <option value="Others">Others</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                        <input style="width:405px;" type="text" name="jobtitle3.2"> 
                                    </td>
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>   
                            <br>
                            <button style="position:relative;top:10px;" type="button" class="float-right btn btn-primary">Next</button>
                            <button style="background-color: #e7e7e7; color: black; position:relative;top:10px;" type="button" class="float-right btn btn-default">Back</button>
                    
                       </div>
                      
                      </div>    
                      
                    </div>
                    <!-- Additional Skills -->
                    <div class="tab-pane fade" id="additionalskills-md" >

                    <div style="padding-left:10px;padding-right:10px;width:950px;height:1250px;border:1px solid #000;position:relative;top:-45px;">
                     <b>Skills:</b>   <br> <br>
                    <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Skills</th>
                                    <th style="text-align:center"></th>
                                    <th style="text-align:center;width:135px;">+ </th>
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="skills4.1" style="width:405px;overflow:hidden;">
                                          <option value="Select PQE Skill">Select PQE Skill</option>    
                                          <option value="CSV Remediation &amp; Data Integrity">CSV Remediation &amp; Data Integrity</option>
                                          <option value="MedDev Compliance">MedDev Compliance</option>
                                          <option value="Serialization">Serialization</option>
                                          <option value="SCADA">SCADA</option>
                                          <option value="MES-WMS">MES-WMS</option>
                                          <option value="Laboratory Excellence Support">Laboratory Excellence Support</option>
                                          <option value="IT Infrastructure &amp; Services">IT Infrastructure &amp; Services</option>
                                          <option value="TQ">TQ</option>
                                          <option value="ERP Systems">ERP Systems</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                       
                                    </td>
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                          <fieldset>
                                          
                                          <select  name="skills4.2" style="width:405px;overflow:hidden;">
                                          <option value="Select PQE Skill">Select PQE Skill</option>    
                                          <option value="CSV Remediation &amp; Data Integrity">CSV Remediation &amp; Data Integrity</option>
                                          <option value="MedDev Compliance">MedDev Compliance</option>
                                          <option value="Serialization">Serialization</option>
                                          <option value="SCADA">SCADA</option>
                                          <option value="MES-WMS">MES-WMS</option>
                                          <option value="Laboratory Excellence Support">Laboratory Excellence Support</option>
                                          <option value="IT Infrastructure &amp; Services">IT Infrastructure &amp; Services</option>
                                          <option value="TQ">TQ</option>
                                          <option value="ERP Systems">ERP Systems</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                        <input style="width:405px;" type="text" name="skills4.2.2"> 
                                    </td>
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <br>  <b>Skills Tag:</b>   <br>  <br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Skills Tag</th>
                                    <th style="text-align:center;width:80px;">+</th>
                                   
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="skillstag4.1" style="width:810px;overflow:hidden;">
                                               
                                         <option value="Select PQE Skill">Select PQE Skill Tag</option>    
                                          <option value="CSV Remediation &amp; Data Integrity">CSV Remediation &amp; Data Integrity</option>
                                          <option value="MedDev Compliance">MedDev Compliance</option>
                                          <option value="Serialization">Serialization</option>
                                          <option value="SCADA">SCADA</option>
                                          <option value="MES-WMS">MES-WMS</option>
                                          <option value="Laboratory Excellence Support">Laboratory Excellence Support</option>
                                          <option value="IT Infrastructure &amp; Services">IT Infrastructure &amp; Services</option>
                                          <option value="TQ">TQ</option>
                                          <option value="ERP Systems">ERP Systems</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                  
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         
                                         <select  name="skillstag4.2" style="width:810px;overflow:hidden;">
                                               
                                               <option value="Select PQE Skill">Select PQE Skill Tag</option>    
                                                <option value="CSV Remediation &amp; Data Integrity">CSV Remediation &amp; Data Integrity</option>
                                                <option value="MedDev Compliance">MedDev Compliance</option>
                                                <option value="Serialization">Serialization</option>
                                                <option value="SCADA">SCADA</option>
                                                <option value="MES-WMS">MES-WMS</option>
                                                <option value="Laboratory Excellence Support">Laboratory Excellence Support</option>
                                                <option value="IT Infrastructure &amp; Services">IT Infrastructure &amp; Services</option>
                                                <option value="TQ">TQ</option>
                                                <option value="ERP Systems">ERP Systems</option>
                                          </select>
                                         </fieldset>
                                    </td> 
                                   
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <br>  <b>Certification/Trainings:</b>  <br>  <br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Certification/Trainings Name</th>
                                    <th style="text-align:center;width:80px;">+</th>
                                   
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         <input type="text" name="certification4.1" style="width:810px;">
                                         </fieldset>
                                    </td> 
                                  
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         <input type="text" name="certification4.2" style="width:810px;">
                                          </select>
                                         </fieldset>
                                    </td> 
                                   
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <br> <b>Achievements:</b>    <br>  <br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Achievement</th>
                                    <th style="text-align:center;width:80px;">+</th>
                                   
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         <input type="text" name="achievement4.1" style="width:810px;">
                                         </fieldset>
                                    </td> 
                                  
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         <input type="text" name="achievement4.2" style="width:810px;">
                                         </fieldset>
                                    </td> 
                                   
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <br>  <b>Soft Skills:</b> <br>  <br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Soft Skills</th>
                                    <th style="text-align:center;width:80px;"></th>
                                    <th style="text-align:center;width:135px;">+ </th>
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="softskills4.1" style="width:405px;overflow:hidden;">
                                               
                                          <option value="Select Soft Skill">Select Soft Skill</option>
                                          <option value="Communication">Communication</option>
                                          <option value="Leadership">Leadership</option>
                                          <option value="Willing to relocate: Anywhere">Willing to relocate: Anywhere</option>
                                          <option value="Time Management">Time Management</option>
                                          <option value="Team Player">Team Player</option>
                                          <option value="Leadership">Leadership</option>
                                          <option value="Others">Others</option> 
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                         
                                    </td>
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                           <select  name="softskills4.2" style="width:405px;overflow:hidden;">
                                               
                                          <option value="Select Soft Skill">Select Soft Skill</option>
                                          <option value="Communication">Communication</option>
                                          <option value="Leadership">Leadership</option>
                                          <option value="Willing to relocate: Anywhere">Willing to relocate: Anywhere</option>
                                          <option value="Time Management">Time Management</option>
                                          <option value="Team Player">Team Player</option>
                                          <option value="Leadership">Leadership</option>
                                          <option value="Others">Others</option> 
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                        <input style="width:405px;" type="text" name="softskills4.2.2"> 
                                    </td>
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                       
                             <br><b>Hobbies/Interests:</b>  <br>  <br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Hobbies/Interests</th>
                                    <th style="text-align:center;width:80px;">+</th>
                                   
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <input style="width:810px;" type="text" name="hobbies4.1"> 
                                         </fieldset>
                                    </td> 
                                  
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                         <input style="width:810px;" type="text" name="hobbies4.2"> 
                                         </fieldset>
                                    </td> 
                                   
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <br> <b>Language:</b> <br><br>
                            <table cellpadding="7" border="1" width="908" >
                                
                                <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                 
                                    <th style="text-align:center">Language</th>
                                    <th style="text-align:center">Proficiency </th>
                                    <th style="text-align:center;width:135px;">+ </th>
                                    
                                </tr>
                                <tr bgcolor="#FFF"> 
                                <td>
                                         <fieldset>
                                          
                                          <select  name="language4.1" style="width:405px;overflow:hidden;">
                                          <option value="English">English</option>    
                                          <option value="French">French</option>
                                          <option value="Italian">Italian</option>
                                          <option value="Hindi">Hindi</option>
                                          
                                          </select>
                                         </fieldset>
                                    </td> 
                                 
                                    <td>
                                          <fieldset>
                                          
                                          <select  name="language4.1.2" style="width:405px;overflow:hidden;">
                                          <option value="Unknown">Unknown</option>                                              
                                          <option value="Beginner">Beginner</option>    
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                        
                                          
                                          </select>
                                         </fieldset>
                         
                                       
                                    </td>
                                    <td style="text-align:center"> -  </td>
                                   
                                </tr>
                                <tr bgcolor="#FFF"> 
                                    <td>
                                         <fieldset>
                                          
                                          <select  name="language4.2" style="width:405px;overflow:hidden;">
                                          <option value="English">English</option>    
                                          <option value="French">French</option>
                                          <option value="Italian">Italian</option>
                                          <option value="Hindi">Hindi</option>
                                          
                                          </select>
                                         </fieldset>
                                    </td> 
                                    <td> 
                                       <select  name="language4.2.2" style="width:405px;overflow:hidden;">
                                         <option value="Unknown">Unknown</option>    
                                          <option value="Beginner">Beginner</option>    
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                        
                                    </td>
                                    
                                    <td style="text-align:center"> -  </td>
                                </tr>
                            </table>
                            <button style="position:relative;top:25px; "type="button" class="float-right btn btn-primary">Next</button>
                             <button style="background-color: #e7e7e7; color: black; position:relative;top:25px;" type="button" class="float-right btn btn-default">Back</button>
                    
                      </div>      
                    </div> 
                    <!-- Others Screen -->
                    <div class="tab-pane fade" id="others-md" >     
                          <br>
                          <div style="padding-left:10px;padding-right:10px;width:950px;height:600px;border:1px solid #000;position:relative;top:-45px;">
                                            
                          <fieldset style="position:relative;">
                          <b> Current Sallary <font color="red">*</font>&ensp;&ensp;</b><input type="text" name="currentsallary" >
                          
                            </fieldset>
                            <input style=" position:absolute; bottom:10px; right:10px;" type="submit" class="btn-primary" value="Save">   
                            </div>

                    </div>



                    </div>    
                   </form> 
               </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('templatedata/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('templatedata/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('templatedata/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('templatedata/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('templatedata/js/off-canvas.js')}}"></script>
  <script src="{{asset('templatedata/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('templatedata/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->

  <script src="{{asset('templatedata/js/dashboard.js')}}"></script> 
  <script src="{{asset('templatedata/js/data-table.js')}}"></script> 
  <script src="{{asset('templatedata/js/dataTables.bootstrap4.js')}}"></script> 
  <script src="{{asset( 'templatedata/js/jquery.dataTables.js')}}"></script> 
  
  <!-- End custom js for this page-->

        <!-- Tabs files -->
        <!-- Next Back JS Code Starts-->
      <script>
    $('.btnNext').click(function(){
      $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });
      </script>
        <!-- Next Back Code Ends -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

          <!-- Tab Files Ends -->

        <!-- Starts For Multi Select DropDown -->
        <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

        <!-- Ends For Multi Select DropDown Ends -->
</body>

</html>

    