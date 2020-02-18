<!DOCTYPE html>
<html lang="en">

<head>
    <style>
     .inputright{
              position:relative;left:550px;
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
    
    <!-- Tab Next back Buttons  -->
   
     <link rel="stylesheet" type="text/css" href="{{ asset('templatedata/css/tabswitching/jquery-ui.css') }}" >
     <!-- Tab Next back Buttons  -->
    
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
                            Recruitment Data (ID: 201900001) 
                        </h4>
                        <button style="background-color: #e7e7e7; color: black;position:relative;left:850px;top:-35px; " class="btn btn-default" onclick="window.location.href='#'"><b>Remove</b></button>   
                       
                </div>
                 <div class="row">
            <div class="col-md-50 stretch-card">
              <div class="card" style="width: 63rem;">
                <div class="card-body">
                    <div>
                    
                            <div id="tabs">
                            <ul class="nav nav-pills" id="myTabMD" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#recruitmentdata-md" role="tab" aria-controls="recruitmentdata-md"
                                    aria-selected="true">RECRUITMENT DATA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#others-md" role="tab" aria-controls="others-md"
                                    aria-selected="false">Others</a>
                                </li> 
                            </ul>
                            
                            <form action="#">

                            <div class="tab-content card pt-5" id="myTabContentMD">
                     
                           <div class="tab-pane" id="recruitmentdata-md" role="tabpanel" aria-labelledby="home-tab-md">
                                <div style="padding-left:15px;padding-right:15px;width:940px;height:680px;border:1px solid #000;position:relative;top:-66px;left:-24px;">
                                    <br>
                                    <p><b>Name: Andrew Kevin John</b><br> </p>
                                    <a href="#"><u>Candidate Status</u></a><br>
                                        <br>                    
                                        <table style="object-fit:cover;"    cellpadding="7" border="1" width="908" >
                                        
                                            <tr style="color: #fff;" height="20" bgcolor="#008DFF">
                                     
                                                <th style="text-align:center">Status</th>
                                                <th style="text-align:center">Remark </th>
                                
                                            </tr>
                                            <tr> 
                                                <td style="text-align:center">
                                                    <select name="status" style="width:400px;">
                                                    <option value="Not Reviewed">Not Reviewed</option>
                                                    <option value="SL/Locked By Recruiter">SL/Locked By Recruiter</option>
                                                    <option value="Selected">Selected</option>
                                                    <option value="Not Selected">Not Selected  </option>
                                                    <option value="Hired">Hired</option>
                                                
                                                    </select>
                                                </td>
                                                <td style="text-align:center"> _ </td>
                                            </tr>


                                        </table>    
                                        <br>
                                    <a href="#"><u>Additional Details Related to Candidate</u></a><br>
                                    <fieldset class="inputleft" style="position:relative;top:10px">
                                        <b> Resume/Candidate Source: </b>   
                                        <select  name="source">
                                        <option value="Select Source" disabled selected>Select Source</option>      
                                        <option value="Linkedln">Linkedln</option>
                                        <option value="Employee Referrl">Employee Referrl</option>
                                        <option value="External Consultancy">External Consultancy</option>
                                        <option value="Indeed">Indeed</option>
                                        </select>
                                    </fieldset>
                                    <fieldse style="position:relative;top:16px;">
                                    <b>Reference Note:&emsp;&emsp;&emsp;&emsp;&ensp;</b><input style="height:50px;position:relative;top:18px;" type="text" name="reference note" height="48">
                                    </fieldset>
                                    <fieldset style="position:relative;top:38px;">
                                        <b>Salary Expectation:</b>
                                        <select  name="currency">
                                            <option value="Currency" disabled selected>Currency</option>      
                                            <option value="USD">USD</option>
                                            <option value="INR">INR</option>
                                            <option value="Euro">Euro</option>
                                            <option value="GBP">GBP</option>
                                        </select>
                                        <input type="text" name="salaryexpectations"  style="width:140px;">
                                    </fieldset>
                                    <fieldset style="position:relative;top:60px;">
                                        <b>Last Salary:</b><input type="text" name="lastsallary" style="position:relative;left:112px;"><br>
                                    </fieldset>
                                    <fieldset style="position:relative;top:63px;">
                                        <b> Reason for a job change:&ensp;&ensp;</b><input type="text" style="height:50px;position:relative;top:18px;" name="reasonforjobchange" style="width:400px;">
                                    </fieldset>
                                    <fieldset style="position:relative;top:102px;">
                                        <b> Current Employement Status: </b>
                                    
                                        <select  name="source" style="width:165px;overflow:hidden;">
                                        <option value="Select Source" disabled selected>Select Current Employement Status</option>      
                                        <option value="Working">Working</option>
                                        <option value="Not Working">Not Working</option>
                                        <option value="Serving Notice">Serving Notice</option>
                                        </select>
                                    </fieldset>
                                    <fieldset style="position:relative;top:120px;">
                                        <a href="#"><u>Attachment</u></a>
                                    </fieldset>
                                    <fieldset style="position:relative;top:140px;">
                                    <b> Upload Photo: </b>
                                        <div class="custom-file" style="position:relative;width:35%;">
                                        <input type="file" class="custom-file-input" id="inputphoto">
                                        <label class="custom-file-label" for="inputphoto"></label>
                                        </div>
                                        <font color="grey">
                                            <small>
                                            <b>Supported Formats:</b> .png, .jpg, .jpeg 
                                            <b>Size: </b>Up to 2 MB
                                            </small>
                                        </font>
                                    
                                    </fieldset>
                                    
                                    <div>   
                                        <fieldset class="inputright" style="top:-232px;">
                                            <b> Special Comments:   &emsp;</b><input type="text" style="height:50px;position:relative;top:18px;" name="specialcomments">
                                        </fieldset>
                                        <fieldset class="inputright" style="top:-193px;">
                                            <b> Notice Period:&emsp;</b><input type="text" name="specialcomments" >in days
                                        </fieldset>
                                        <fieldset class="inputright" style="top:-171px;">
                                            <b> Current Contract Type: </b>
                                            <select  name="contracttype">
                                            <option value="Select Contract Type" disabled selected>Select Contract Type:</option>      
                                            <option value="Freelancer">Freelancer</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Intern">Intern</option>
                                            <option value="Permanent Employee">Permanent Employee</option>
                                            <option value="Outsourced">Outsourced</option>
                                            </select>
                                        </fieldset>  
                                        <fieldset class="inputright" style="top:-156px;">
                                            <b> Buyout Option: &emsp;&emsp;&emsp;&ensp;</b>
                                            <select  name="buyoutoption">
                                            <option value="Select Buyout Option" disabled selected>Select Buyout Option:</option>      
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            </select>
                                        </fieldset>  
                                        <fieldset class="inputright" style="top:-102px;">
                                            <b> Subsidiary: &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;</b>
                                            <select  name="subsidiary" style="width:168px;overflow:hidden;" class="js-example-basic-multiple"  multiple="multiple">
                                        
                                            <option value="PQE Global">PQE Global</option>
                                            <option value="PQE India">PQE India</option>
                                            <option value="PQE Italy">PQE Italy</option>
                                            </select>
                                        </fieldset>  
                                    </div>
                                    <fieldset>
                                    <button style="position:relative;left:-10px;" type="button" class="float-right btn btn-primary"  ID="btnNext">Next</button>
                                
                                    </fieldset>
                                
                                     
                        </div>             
                                
                        </div>
                            <div class="tab-pane" id="others-md">

                               <div style="padding-left:15px;padding-right:15px;width:940px;height:680px;border:1px solid #000;position:relative;top:-66px;left:-24px;">
                                    <br>                    
                                <fieldset style="position:relative;">
                                 <b> Current Sallary <font color="red">*</font>&ensp;&ensp;</b><input type="text" name="currentsallary" >
                                
                                  </fieldset>
                                  <fieldset style=" position:absolute; bottom:10px; right:10px;">
                                 <Button class="btn btn-primary" ID="btnPrevious"
                                Width="50px" Height="50px" >Back</button>
                                <input type="submit" class="btn btn-primary">
                                </fieldset>
                                                            
                                </div>
                            </div>
                   
                        </div>
                     </form>       
                           
                    </div>                    
                                    
                  
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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.8.3/jquery-ui.js"></script>
 
<script type="text/javascript">
        var currentTab = 0;
        $(function () {
            $("#tabs").tabs({
                select: function (e, i) {
                    currentTab = i.index;
                }
            });
        });
        $("#btnNext").live("click", function () {
            var tabs = $('#tabs').tabs();
            var c = $('#tabs').tabs("length");
            currentTab = currentTab == (c - 1) ? currentTab : (currentTab + 1);
            tabs.tabs('select', currentTab);
            $("#btnPrevious").show();
            if (currentTab == (c - 1)) {
                $("#btnNext").hide();
            } else {
                $("#btnNext").show();
            }
            return false;
        });
        $("#btnPrevious").live("click", function () {
            var tabs = $('#tabs').tabs();
            var c = $('#tabs').tabs("length");
            currentTab = currentTab == 0 ? currentTab : (currentTab - 1);
            tabs.tabs('select', currentTab);
            if (currentTab == 0) {
                $("#btnNext").show();
                $("#btnPrevious").hide();
            }
            if (currentTab < (c - 1)) {
                $("#btnNext").show();
            }
            return false;
        });
    </script> 
        <!-- Next Back Code Ends -->
       
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

