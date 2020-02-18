<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->


   <!-- Starts For MultiSelect Dropdown -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<!-- Ends For Starts For MultiSelect Dropdown -->

  
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
              <!-- <div class="d-flex justify-content-between flex-wrap"> -->
                <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">

                <div style="height:60px;" class="p-3 mb-2 bg-primary text-white">
                        <h4>    
                           Add New User
                        </h4>
                        <button class="btn" style="background-color: #e7e7e7; color: black; position:relative;left:870px;top:-32px;  " onclick="window.location.href='#'">Back</button>
                </div>    
          <div class="row">
          <div class="col-md-50 stretch-card">
              <div class="card" style="width: 63rem;">
                <div class="card-body">
                    
                  <div style="padding-left:10px;padding-right:10px;">
                  <form action="#">
                        <div style="height:200px;width:50%;position:relative;">
                    

                        <fieldset>
                        <b>First Name:<font color="red">*</font>
                        
                        <input type="text" name="fname">
                       </fieldset></b><br>
                          <fieldset>
                        <b>Email:<font color="red">*</font> </b>
                       
                        <input type="text" name="email">
                       </fieldset>
                       </b><br>
                       <fieldset>
                        <b> Role :<font color="Red">*</font> </b>
                        <select  name="unitlist">
                            <option value="Select Role">Select Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Global Recruiter">Global Recruiter</option>
                            <option value="Local Recruiter">Local Recruiter</option>
                            <option value="Global Uploader">Global Uploader</option>
                            <option value="Global Viewer">Global Viewer</option>
                        
                        </select>
                       
                        </fieldset> 
                        <fieldset>
                        <br><br>
                        <input type="checkbox" id="myCheck"><b>&ensp;Active?</b>
                         

                        </fieldset>
                        <br><br>
                        <fieldset>
                        <input type="submit" class="btn btn-primary" value="Save">&emsp;&ensp;
                        <button class="btn" style="background-color: #e7e7e7; color: black;  " onclick="window.location.href='#'">Cancel</button>
          
                        </fieldset>
                        
                        </div>
                        
                        <div style="height:200px;width:50%;position:relative;top:-200px;left:66%;">
                              
                               
                               
                        <fieldset>
                        <b>Last Name:<font color="red">*</font></b>
                        
                        <input type="text" name="lname">
                       </fieldset></b><br>
                          <fieldset>
                        <b>Contact Number::<font color="red">*</font> </b>
                       
                        <input type="text" name="contact">
                       </fieldset>
                      <br>
                
                         <fieldset>

                         <b> Subsidiary(ies): </b>
                            <select name="subsidiaries" class="js-example-basic-multiple"  multiple="multiple">
                            <option value="Select Skill Tag" disabled> Select Company </option>
                            <option value="PQE Global">PQE Global  </option>
                            <option value="PQE India">PQE India  </option>
                            <option value="PQE Italy">PQE Italy  </option>
                            </select>
                        </fieldset>
                                 
                                 
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
  


<!-- Starts For Multi Select DropDown -->
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<!-- Ends For Multi Select DropDown Ends -->  
  <!-- End custom js for this page-->
</body>

</html>
