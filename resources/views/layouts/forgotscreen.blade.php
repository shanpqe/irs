

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
<style>

body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#forgot .container #forgot-row #forgot-column #forgot-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#forgot .container #forgot-row #forgot-column #forgot-box #forgot-form {
  padding: 20px;
}
#forgot .container #forgot-row #forgot-column #forgot-box #forgot-form #register-link {
  margin-top: -85px;
}
</style>
<body>
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
                                <input type="text" name="email" id="email" class="form-control">
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
</body>
