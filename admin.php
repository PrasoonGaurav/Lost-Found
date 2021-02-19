<?php
$msg="";
    if(isset($_POST['login']))
    {
        $uname=$_POST['email'];
        $pwd=$_POST['password'];
        if($uname == 'admin@gmail.com' and $pwd='admin')
        {
          $msg="";
          header("location:adminpanel.php");
        }
        else 
        {

        $msg="<font color='red'><b>Invalid Username OR Password</b></font>";
          
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" align="center">
          <h3 class="font-weight-bold font my-4" style="color : royalblue">ADMIN PANEL</h3>
          
        </div>
        <div class="col-sm-3"></div>

      </div>
          
    </div>  
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" align="center">
          <h6 class="font-weight-bold font my-4"><?php echo $msg; ?> </h6>
          
        </div>
        <div class="col-sm-3"></div>

      </div>
          
    </div>  
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h3 class="font-weight-bold font my-4">Login</h3>
          <form method="post">
            <div class="form-group">
              <label class="font-weight-bold" for="exampleInputEmail1">Email address</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
                name="email"                
              />
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="exampleInputPassword1">Password</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password"
                name="password"
              />
            </div>            
            <div class="form-group form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
                name="rememberPassword"
              />
              <label class="form-check-label" for="exampleCheck1"
                >Remember Password</label
              >
            </div>
            <input type="submit" name="login" value="Login" class="btn btn-primary" />
          </form>
        </div>
        <div class="col-sm-3"></div>      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
		