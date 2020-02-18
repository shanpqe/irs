
        <!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .inputright{
            position:relative;
             left:480px;
        }
       
</style>
 <!-- Starts For MultiSelect Dropdown -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<!-- Ends For Starts For MultiSelect Dropdown -->


  <!-- Required meta tags -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  -->
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
  <!-- Muti Select CSS -->
    <!-- Multi Select CSS Ends Here -->

</head>
<body>

<div style="margin-top: 10px;">
</div>
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
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">

                  <div class="p-3 mb-2 bg-primary text-white">
                        <h3>    
                            Upload Resume (Single & Bulk Upload)
                        </h3>
                  </div>     


          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card" style="width: 70rem;">
                <div class="card-body">
                
                       
                
                    <!-- <p class="bg-primary"> Upload Resume</p> -->
                    
                  <form class="md-form" action="#">      
                            <fieldset style="position:relative;">
                              <b> Resume/Candidate Source : </b>
                            <select style="overflow:hidden;" name="resumesource" class="js-example-basic-multiple">
                              <option value="" disabled selected>Choose your option</option>      
                            
                              <option value="Linkedln">Linkedln</option>
                              <option value="Employee Referrl">Employee Referrl</option>
                              <option value="External Consultancy">External Consultancy</option>
                              <option value="Indeed">Indeed</option>
                            </select>
                        </fieldset>
                        <fieldset style="position:relative;top:20px;">
                          
                        <b> Unit Tags : &emsp;&emsp;&nbsp;</b>
                        
                        <select name="unittags" class="js-example-basic-multiple"  multiple="multiple">  
                            <option value="Select Unit Tags" disabled>Select Unit Tags</option>
                            <option value="Compliance">Compliance</option>
                            <option value="Validation">Validation</option>
                            <option value="Qualification/Quality Enginering">Qualification/Quality Enginering</option>
                            <option value="Regulatory Affairs">Regulatory Affairs</option>
                            <option value="Third Party Audits">Third Party Audits</option>
                            <option value="No Experience">No Experience</option>
                         </select>
                        </fieldset>
                       
                        <fieldset style="position:relative;top:40px;"> 
                          
                             <b> Department Tags: </b>
                        <select name="departmenttags" class="js-example-basic-multiple"  multiple="multiple">
                             <option value="Select Department Tags:" disabled>Select Department Tags:</option>
                             <option value="Marketing & Communication">Marketing & Communication</option>
                             <option value="HR">HR</option>
                             <option value="Recruitment">Recruitment</option>
                             <option value="Administration">Administration</option>
                             <option value="IT HW & SW">IT HW & SW</option>
                             <option value="Sales And Business Development">Sales And Business Development</option>

                        </select>
                      
                        </fieldset>  
                        <fieldset style="position:relative;top:60px;width:35%;">
                        <div class="input-group">
                           <b> Upload Resume: </b><div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                
                            </div>

                           <img style=" height:25px;position:relative;top:6px;" title="Supported Formats: .pdf, .docx. txt, .doc
Size: Up tp 40Mb
Maximum Upload allowed:100 Resumes" src="{{ asset('templatedata/images/info.svg') }}" class="float-right" alt="profile"/>

                            <!-- <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Button</button>
                            </div> -->
                            </div>
                        </fieldset>
                         <!-- <fieldset style="top:-105px;"  class="inputright">
                         <b> Referred By: </b>
                            <select name="referedby">
                                <option value="Select External Consultancy">Select External Consultancy</option>
                                <option value="Tech Consultancy">Tech Consultancy</option>
                            </select>
                        </fieldset> -->
                        <br>
                        
                        <fieldset style="top:-85px;" class="inputright">

                         <b> Skill Tag: </b>
                            <select name="silltag" class="js-example-basic-multiple"  multiple="multiple">
                            <option value="Select Skill Tag" disabled> Select Skill Tag  </option>
                            <option value="CSV Remediation And Data Integrity">CSV Remediation And Data Integrity  </option>
                            <option value="MedDev Compliance">MedDev Compliance  </option>
                            <option value="Serialisation">Serialisation  </option>
                            <option value="SCADA">SCADA  </option>
                            <option value="MES-WMS">MES-WMS  </option>
                            <option value="Laboratory Excelence Support">Laboratory Excelence Support  </option>
                            <option value="IT Infrastructure & Services">IT Infrastructure & Services  </option>
                            <option value="TQ ">TQ   </option>
                            <option value="ERP System">ERP System  </option>
                            </select>
                        </fieldset>
                          
                       
                        <fieldset style="top:-60px;" class="inputright">
                         <b> Subsidiary: </b>
                            <select name="subsidiary" class="js-example-basic-multiple" multiple="multiple">
                            <option value="PQE Global"> PQE Global  </option>
                            <option value="PQE India"> PQE India  </option>
                            <option value="PQE Italy"> PQE Italy  </option>
                            </select>
                        </fieldset>
                        <fieldset align="Center">
                            <input class="btn btn-primary" value="Upload" type="submit">
                        </fieldset>      

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

  <!-- Multi select Dropdown-->


  <!-- End Multi Select -->
  <!-- Custom js for this page-->

  <script src="{{asset('templatedata/js/dashboard.js')}}"></script> 
  <script src="{{asset('templatedata/js/data-table.js')}}"></script> 
  <script src="{{asset('templatedata/js/dataTables.bootstrap4.js')}}"></script> 
  <script src="{{asset( 'templatedata/js/jquery.dataTables.js')}}"></script>   

   

  <!-- End custom js for this page-->


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

