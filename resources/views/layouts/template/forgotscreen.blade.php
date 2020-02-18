<!DOCTYPE html>
<html lang="en">

<head>
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

  <style>

body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>

</head>
<body>
<div class="container-scroller">

    <div class="container-fluid page-body-wrapper">
     
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
          
                
            <div id="forgot">
        
                    <div class="container">
                        <div id="forgot-row" class="row justify-content-center align-items-center">
                            <div id="forgot-column" class="col-md-6">
                                <div id="forgot-box" class="col-md-12">
                                    <form id="forgotpwd-link2" class="form" action="" method="post">
                                        
                                        <h3 class="text-center text-info">Forgot Password</h3>
                                        <br>
                                        
                                        <div class="form-group">
                                            <label for="email" class="text-info">Please enter your registered Email ID </label><br>
                                            <input type="text" name="email" placeholder="Email ID" id="email" class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                            <input type="submit" name="forgot" class="btn btn-info btn-md" value="Send">
                                        </div>
                                        <div id="forgot-link" class="text-right">
                                            <a href="login" class="text-info">Go back to login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- page-body-wrapper ends -->
           </div>
        </div>
    </div>
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
</body>

</html>

