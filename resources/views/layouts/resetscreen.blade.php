

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
<style>

body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#reset .container #reset-row #reset-column #reset-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#reset .container #reset-row #reset-column #reset-box #reset-form {
  padding: 20px;
}
#reset .container #reset-row #reset-column #reset-box #reset-form #register-link {
  margin-top: -85px;
}
</style>
</head>

<body>
    <div id="reset">
        <div class="container">
            <div id="reset-row" class="row justify-content-center align-items-center">
                <div id="reset-column" class="col-md-7">
                    <div id="reset-box" class="col-md-12">
                        <form id="reset-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Reset</h3>
                            <div class="form-group">
                            
                                <label for="password" class="text-info">The password should be minimum of 8 characters along with at least one uppercase, one lowercase, one digit and one special character like @$%&</font></label><br>
                                <input type="text" name="password_one" id="password_one" class="form-control">
                            </div>
                            <div class="form-group">
                            
                                <input type="text" name="password_two" id="password_two" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="reset" class="btn btn-info btn-md" value="Reset">
                            </div>
                            <div id="login-link" class="text-right">
                                <a href="#" class="text-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
