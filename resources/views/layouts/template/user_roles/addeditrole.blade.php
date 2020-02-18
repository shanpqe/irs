<!DOCTYPE html>
<html lang="en">

<head>
    <style>
     .inputright{
           position:relative;left:540px;
        }

  
</style>
  <!-- Required meta tags -->
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
              <i class="mdi mdi-account-star menu-icon"></i>
              <span class="menu-title">User & Roles</span>
            </a>
        </li>
        <li class="nav-item" style="height:66px;">
            <a class="nav-link" href="upload/resume.html">
              <i style="position:relative;top:2px;" class="mdi mdi-account-box menu-icon"></i>
              <span class="menu-title">Candidate Profile </span>
              <span class="menu-title" style="position:relative;left:-105px;top:22px;">Fields Management </span>
              <div></div>

           </a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" href="pages/profile/mdi.html">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Master</span>
            </a>
          </li>
         
          
        </ul>
      </nav>
      <!-- partial -->
 <div class="main-panel">
        <div class="content-wrapper">
          
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">

                  <div class="p-3 mb-2 bg-primary text-white">
                        <h4>    
                          Add New Role
                        </h4>
                  </div>         
          <div class="row">
            <div class="col-md-50 stretch-card">
              <div class="card" style="width: 63rem;">
                <div class="card-body">
                 
                
                  <form action="#">

                        <fieldset>
                        <b> Role Name:<font color="red">*</font>
                        </b>
                        <input type="text" name="rolename">
                       </fieldset>
                      
                        
                        <fieldset style="position:relative;top:84px;">
                        <b> Privilege For :<font color="Red">*</font> </b>
                        <select  id="preivilegelistid" name="preivilegelist" onchange="onchangefunction()">
                            <option value="Select" selected>Select</option>
                            <option value="Admin">Admin</option>
                            <option value="Recruiter">Recruiter</option>
                           
                        </select>
                        </fieldset>
                        <fieldset class="inputright" style="top:-84px;">
                        <br>
                        <b> Description:
                        </b>
                        <input type="text" name="description" style="height:60px;position:relative;top:20px;">
                       </fieldset>
                       
                        <br><br><br><br><br> 
                   
                        <fieldset>
                            <button type="submit" class="btn btn-primary float-left">Save</button>
                            
                            
                            <button style="background-color: #e7e7e7; color: black; position:relative;left:20px;" type="button" class="float-left btn btn-default">Cancel </button>
                          </fieldset>
                          <div id="boxid1" style="width:350px;top:-100px;display:none;background-color: #E9E9E9;pointer-events: none;" class="inputright">
                                    <div style="padding-top:8px;padding-bottom: .5px; " class="bg-primary text-white">  
                                        <center>
                                            <h4>
                                                Privilege
                                            </h3>
                                        </center>
                                    </div>
                                    <div style="padding-top:10px;border:1px solid #000;padding-left:2px;height:173px;">
                                    <div style="width:50%;">
                                        <input type="checkbox" name="uploadresume1" value="Upload Resume"> Upload Resume<br>
                                        <br>
                                        <input type="checkbox" name="exporttocsv1" value="Export to Excel/CSV"> Export to Excel/CSV<br>
                                        <br>
                                        <input type="checkbox" name="editcandidatedetails1" value="Edit Candidate Details">Edit Candidate Details<br>
                                        <br>
                                        <input type="checkbox" name="editcandidatedetails1" value="View Candidate Details">View Candidate Details<br>
                                        <br>
                                    </div>
                                     <div style="width:50%;position:relative;left:50%;top:-175px;" >
                                        <input type="checkbox" name="globallysearch1" value="Globally Search"> Globally Search<br>
                                        <br>
                                        <input type="checkbox" name="delete1" value="Delete">Delete<br>
                                        <br>
                                        <input type="checkbox" name="editrecruitmentdata1" value="Edit Recruitment Data"> Edit Recruitment Data<br>
                                        <br>
                                        <input type="checkbox" name="viewrecruitmentdata1"  value="View Recruitment Data"> View Recruitment Data<br>
                                        <br>
                                    </div>
                                    </div>
                          </div>
                          <div id="boxid2" style="width:350px;top:-100px;display:none;" class="inputright">
                                    <div style="padding-top:8px;padding-bottom: .5px; " class="bg-primary text-white">  
                                        <center>
                                            <h4>
                                                Privilege
                                            </h3>
                                        </center>
                                    </div>
                                    <div style="padding-top:10px;border:1px solid #000;padding-left:2px;height:173px;">
                                    <div style="width:50%;">
                                        <input type="checkbox" name="uploadresume2" value="Upload Resume"> Upload Resume<br>
                                        <br>
                                        <input type="checkbox" name="exporttocsv2" value="Export to Excel/CSV"> Export to Excel/CSV<br>
                                        <br>
                                        <input type="checkbox" name="editcandidatedetails2" value="Edit Candidate Details">Edit Candidate Details<br>
                                        <br>
                                        <input type="checkbox" name="editcandidatedetails2" value="View Candidate Details">View Candidate Details<br>
                                        <br>
                                    </div>
                                     <div style="width:50%;position:relative;left:50%;top:-175px;" >
                                        <input type="checkbox" name="globallysearch2" value="Globally Search"> Globally Search<br>
                                        <br>
                                        <input type="checkbox" name="delete2" value="Delete">Delete<br>
                                        <br>
                                        <input type="checkbox" name="editrecruitmentdata2" value="Edit Recruitment Data"> Edit Recruitment Data<br>
                                        <br>
                                        <input type="checkbox" name="viewrecruitmentdata2"  value="View Recruitment Data"> View Recruitment Data<br>
                                        <br>
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
    
          <!-- End custom js for this page Starts-->
  <script>
  function onchangefunction() {
    var e = document.getElementById("preivilegelistid");
    var value = e.options[e.selectedIndex].value;
    var x1=document.getElementById("boxid1");
    var x2=document.getElementById("boxid2");
      if(value=="Select")
      {
        x1.style.display = "none";
        x2.style.display = "none";
      }
      if(value=="Admin")
      {
        x1.style.display = "block";
        x2.style.display = "none";
        
      }
      if(value=="Recruiter")
      {
        x1.style.display = "none";
        x2.style.display = "block";

      }
            
}
  </script>
  <!-- JS For Select Item Change Ends-->
</body>

</html>

