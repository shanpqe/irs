


<!DOCTYPE html>
<html lang="en">

<head>
<style>

/* Align Content in Rows In Center */
tr {
text-align: center;
}

</style>

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
    <!-- CSS FILE FOr Table Starts Here -->
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css" rel="stylesheet"> 
    <!-- CSS FILE FOr Table Ends Here -->
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
                            Users & Roles
                        </h4>
                      
                       
                </div>
                 <div class="row">
            <div class="col-md-50 stretch-card">
              <div class="card" style="width: 63rem;">
                <div class="card-body">
                  <div id="tabs">
                    <ul class="nav nav-pills" id="myTabMD" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#usermanagement-md" role="tab" aria-controls="usermanagement-md"
                            aria-selected="true">USER MANAGEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#rolemanagement-md" role="tab" aria-controls="rolemanagement-md"
                            aria-selected="false">ROLE MANAGEMENT</a>
                        </li> 
                    </ul>

                    <!-- <form action="#"> -->
                    <div class="tab-content card pt-5" id="myTabContentMD">
                     
                    <div class="tab-pane fade show active" id="usermanagement-md" role="tabpanel" aria-labelledby="home-tab-md">
                     <div style="height:30px;";>
                      <div id="filterdiv">
                      <img style="height:110%;"src="{{ asset('templatedata/images/filter_icon.svg') }}" >
                    
                      </div>
                      <div>
                    <button style="position:relative;top:-45px;left:735px;" class="btn btn-primary" onclick="window.location.href='addedituser'">Add User<b></b></button>   
                      </div>
                    </div>
                    
                 <div class="table-responsive">
                 <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Status</th>
                                            
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="viewuser"> Andrew John
                                                </a> 
                                            </td>

                                            <td>andrew.john@gmail.com</td>
                                            <td>+39 088 572 900</td>
                                            
                                            <td>Active</td>
                                            <td>
                                                <a href="addedituser">
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                </a>
                                                &emsp;<img src="{{asset('templatedata/images/changestatus_icon.svg')}}">
                                                &emsp; <img  src="{{asset('templatedata/images/del.svg')}}">
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Gracie Kath</td>

                                            <td>gracie.kath@yahoo.com </td>
                                            <td>+39 095 685 862</td>
                                            
                                            <td>Inactive</td>
                                            <td>
                                           
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                &emsp;<img src="{{asset('templatedata/images/changestatus_icon.svg')}}">
                                                &emsp; <img  src="{{asset('templatedata/images/del.svg')}}">
                                         
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Helena Jane</td>

                                            <td>helena.jane@yahoo.co.in</td>
                                            <td>+1 123 456 4506</td>
                                            
                                            <td>Active</td>
                                            <td>
                                           
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                &emsp;<img src="{{asset('templatedata/images/changestatus_icon.svg')}}">
                                                &emsp; <img  src="{{asset('templatedata/images/del.svg')}}">
                                         
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rachel Pierce</td>

                                            <td>rachel.pierce@outlook.com</td>
                                            <td>+44 567 789 1478</td>
                                            
                                            <td>Active</td>
                                            <td>
                                           
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                &emsp;<img src="{{asset('templatedata/images/changestatus_icon.svg')}}">
                                                &emsp; <img  src="{{asset('templatedata/images/del.svg')}}">
                                         
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thomas Mark</td>

                                            <td>thomas.mark@gmail.com</td>
                                            <td>+1 745 895 6321</td>
                                            
                                            <td>Inactive</td>
                                            <td>
                                           
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                &emsp;<img src="{{asset('templatedata/images/changestatus_icon.svg')}}">
                                                &emsp; <img  src="{{asset('templatedata/images/del.svg')}}">
                                         
                                            </td>
                                        </tr>
                      
                                        
                                    </tbody>
                            </table>
                </div>
                    </div>
                    
                    <div class="tab-pane fade" id="rolemanagement-md" >     
                          
                            <div style="height:30px;";>
                      <div id="filterdiv2">
                      <img style="height:110%;"src="{{ asset('templatedata/images/filter_icon.svg') }}" >
                    
                      </div>
                      <div>
                    <button style="position:relative;top:-45px;left:735px;" class="btn btn-primary" onclick="window.location.href='addeditrole'"><b>Add Role</b></button>   
                      </div>
                    </div>
                            
                            <div class="table-responsive">
                            <table id="example2" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                        <th>Role</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="viewrole"> Admin</a></td>
                                            <td>Able to access All masters, User & Role management and Candidate<br> Field Management</td>
                                            <td>
                                                <a href="addeditrole">
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                                </a>
                                                &emsp;&emsp;
                                                <img  src="{{asset('templatedata/images/del.svg')}}">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Global Recruiter</td>
                                            <td>Able to Upload, Edit, View, Search, Export all profiles</td>
                                            <td>
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                               
                                                &emsp;&emsp;
                                                <img  src="{{asset('templatedata/images/del.svg')}}">
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Local Recruiter </td>
                                            <td>Able to Upload, Edit, View, Search, Export all profiles based on the<br> mapped subsidiaries</td>
                                            <td>
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                               
                                                &emsp;&emsp;
                                                <img  src="{{asset('templatedata/images/del.svg')}}">
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Global Uploader</td>
                                            <td>Able to Upload, Edit, View and Search all profiles (Excluding Recruiter <br> Data)</td>
                                            <td>
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                               
                                                &emsp;&emsp;
                                                <img  src="{{asset('templatedata/images/del.svg')}}">
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Global Viewer</td>
                                            <td>Able to Search and view (Excluding export of data)</td>
                                            <td>
                                                <img src="{{asset('templatedata/images/edit.svg')}}">
                                               
                                                &emsp;&emsp;
                                                <img  src="{{asset('templatedata/images/del.svg')}}">
                                               
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                            </table>
                </div>

                    </div>

                    </div>    
                   <!-- </form> -->
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
      <script>
      $("#tabs").tabs();
      $(".nexttab").click(function() {
          var selected = $("#tabs").tabs("option", "selected");
          $("#tabs").tabs("option", "selected", selected + 1);
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
    
    
  <!-- Script Files For Table Starts Here -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 


<script>
$(document).ready(function() {
$('#example').DataTable( {
    initComplete: function () {
      this.api().columns([0]).every( function () {
        
            var column = this;
            var image= '<img style="position:relative;top:30px;right:55px;height:110%"src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UAV723/0b/54/03/0b540347611146f6b05f5dbb26a803a2/images/candidate_profile/u266.svg?token=1092d4bdf0bceb49e2cad6ec970ddbdc71cab8d9c0e98fa595ab6945a80bf378"> ';
                 
            var select = $('<select style="position:relative;left:12px;"><option value="">Name Filter</option></select>')
            .appendTo( '#filterdiv' )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search( val ? '^'+val+'$' : '', true, false )
                        .draw();
                } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }
} );
} );
</script>


<script>
$(document).ready(function() {
$('#example2').DataTable( {
    initComplete: function () {
      this.api().columns([0]).every( function () {
        
            var column = this;
            var image= '<img style="position:relative;top:30px;right:55px;height:110%"src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UAV723/0b/54/03/0b540347611146f6b05f5dbb26a803a2/images/candidate_profile/u266.svg?token=1092d4bdf0bceb49e2cad6ec970ddbdc71cab8d9c0e98fa595ab6945a80bf378"> ';
                 
            var select = $('<select style="position:relative;left:12px;"><option value="">Name Filter</option></select>')
            .appendTo( '#filterdiv2' )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search( val ? '^'+val+'$' : '', true, false )
                        .draw();
                } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }
} );
} );
</script>
<!-- Script File for table ends here -->

        
          
</body>

</html>



