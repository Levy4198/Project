 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
            font-family:Times New Roman, Times, serif;
        background-image : url("waterdrop.jpg");
        
        text-align : center;
         }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>

    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="validation.php" method="GET">
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>  
      <!-- /.content-wrapper -->
      <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://facebook.com/igwelevy/messages">Hi-td.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 
    </div>
  </footer>  
</body>
</html>