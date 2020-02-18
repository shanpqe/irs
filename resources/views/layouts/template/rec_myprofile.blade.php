<!DOCTYPE html>
<html lang="en">

<head>

<style>
#hyperlinkbutton {
  background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  /*input has OS specific font-family*/
  color: #069;
  text-decoration: underline;
  cursor: pointer;
    }
</style>

<style> 



	/*add full-width input fields*/ 
	
	#popupforminputs { 
		width: 80%; 
        height:30px;
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 2px solid #ccc; 
		box-sizing: border-box; 
	} 
	

	/*add padding to container elements*/ 
	.container { 
		padding: 16px; 
	} 
  /*set styles for the cancel button*/ 
      
  .cancelbtn { 
        padding: 15px 20px; 
        border: none;
        position:relative;
        bottom:6px;
        

    } 

	/*define the modal’s background*/ 
	
	.modal { 
		display: none; 
		position: fixed; 
		z-index: 1; 
		left: 0; 
		top: 0; 
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0, 0, 0); 
		background-color: rgba(0, 0, 0, 0.4); 
		padding-top: 60px; 
	} 
	/*define the modal-content background*/ 
	
	.modal-content { 
		background-color: #fefefe; 
		margin: 5% auto 15% auto; 
		border: 1px solid #888; 
		width: 80%; 
	} 
	
	/*define the close hover and focus effects*/ 
	
	.close:hover, 
	.close:focus { 
		color: red; 
		cursor: pointer; 
	} 
	
	.clearfix::after { 
		content: ""; 
		clear: both; 
		display: table; 
	} 
	
	@media screen and (max-width: 300px) { 
		.cancelbtn, 
		.signupbtn { 
			width: 100%; 
		} 
	} 
</style> 


    <style>
     .inputright{
            position:relative;
             left:480px;
        }

        .inputleft{

          position:relative; left:25px;
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
                        <h4>    
                            My Profile
                        </h4>
                  </div>         
          <div class="row">
            <div class="col-md-50 stretch-card">
              <div class="card" style="width: 70rem;">
                <div class="card-body">
                 
                
                  <form action="#">
                        <fieldset>
                          <center>
                                <img src="https://krausefx.com/assets/posts/profilePictures/FelixKrause2014.jpg" style = "position:relative; left:-80px; top:-15px;border-radius: 50%;" height="160" width="160">
                          </center>    
                        </fieldset>    
                      
                    
                        <fieldset class="inputleft">
                        <b> First name: </b> <input type="text" name="fname">
                       </fieldset>
                      
                       <fieldset class="inputleft" style = "top:15px">
                           <p> <b>Email id :   </b>  abc@def.com </p>
                        </fieldset>
                        <fieldset class="inputleft" style = "top:30px">
                        <b> Country : </b>
                        <select  name="country">
                            <option value="Select Country">Select Country</option>
                            <option value="Italy">Italy</option>
                            <option value="India">India</option>
                        </select>
                        </fieldset>
                        <fieldset class="inputleft" style = " top:45px">
                        <b> Date Format: </b>
                        <select name="date_format">
                            <option value="Select date format">Select date format</option>
                            <option value="dd/mm/yy">dd/mm/yy</option>
                            <option value="mm/dd/yy">mm/dd/yy</option>
                            <option value="yyy-mm-dd">yyy-mm-dd</option>
                            <option value="1 August 2019">1 August 2019</option>
                            <option value="August 1, 2019">August 1, 2019</option>
                        </select>
                        </fieldset>
                        
                        <fieldset class="inputleft" style = " top:60px">
                           <p> <b>Subsidiary :   </b>  PQE Italy </p>
                        </fieldset>
                        <fieldset style = "top:-130px;" class="inputright">
                       <b>  Last name: </b><input type="text" name="lname">
                      </fieldset>
                       <fieldset style = "top:-115px;" class="inputright">
                            <b>Language : </b>
                            <select name="language">
                                <option value="Select Language">Select Language</option>
                                <option value="English">English</option>
                            </select>
                        </fieldset>
                        <fieldset style = "top:-100px;"  class="inputright">
                            <b>Time Zone : </b>
                            <select name="language">
                                <option value="Select TimeZone">Select TimeZone</option>
                                <option value="European Central Time Zone- GMT">European Central Time Zone- GMT</option>
                            </select>
                        </fieldset>
                        <fieldset style = "top:-85px;" class="inputright">
                            <b>Time Format : </b>
                            <select name="language">
                                <option value="Select TimeZone">Select Time Format</option>
                                <option value="Tiem Format">24 hrs(hh:mm:ss)</option>
                            </select>
                        </fieldset>
                     
                        <fieldset class="inputright" style = "top:-60px;">   
                            <a href="#" onclick="document.getElementById('popupid').style.display='block'" style="width:auto;">Change Password</a>
                     
                        </fieldset>
                       
                        <fieldset>
                            
                            <!-- <input style="position:relative;left:280px;" type="submit" value="Save"> -->
                            <button style="position:relative;left:320px;" type="submit" class="btn btn-primary ">Save</button>
                            
                            <button style="background-color: #e7e7e7; color: black; position:relative;left:350px;" type="button" class="btn btn-default">Cancel </button>
                        
                        </fieldset>
                 
                            
                  </form>  
                         	
                  <div id="popupid" class="modal"    > 
                                <span onclick="document.getElementById('popupid').style.display='none'" class="close" title="Close Modal">×</span> 
                                <form class="modal-content animate" style="width:400px;background-color: white;" action="/action_page.php"> 
                                    <div class="container"> 
                                    <Center>
                                    <div class="p-2 mb-2 bg-primary text-white">
                                    <button type="button" class="btn btn-primary float-right cancelbtn" onclick="document.getElementById('popupid').style.display='none'">x</button> 
                                        <h4>Change Password</h4>
                                    </div>
                                    

                                   <p><b>The password should be minimum of 8 characters along with at least one uppercase, one lowercase, one digit and one special character like @$%&
                                                           </b> </p>
                                        <input type="password" id="popupforminputs" placeholder="Current Password" name="curr-psw" required> 

                                    
                                        <input type="password" id="popupforminputs"  placeholder="New Password" name="psw" required> 

                                        <input type="password" id="popupforminputs"  placeholder="Confirm Password" name="psw-repeat" required> 
                                        
                                        <div class="clearfix"> 
                                        <br>
                                           
                                            <button type="submit" class="btn btn-primary ">Sign Up</button> 
                                        </div> 
                                    </center>
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
  <!-- Sart Script of Popul  -->
  	<script> 
		var modal = document.getElementById('popupid'); 

		window.onclick = function(event) { 
			if (event.target == modal) { 
				modal.style.display = "none"; 
			} 
		} 
	</script> 
    <!-- End Script For Popup    -->
  <!-- End custom js for this page-->
</body>
</html>