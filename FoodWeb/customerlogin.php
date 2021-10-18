    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Login page </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/globalstyles.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="nav-bar-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-item home-item-nav" href="index.php">YummiYummi</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php" class="nav-item">Home</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active nav-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
      
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active nav-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				</span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
   
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="login-container">
		<div class="" style="text-align: center;padding-top:10px;">
			<h1>Xin kính chào quý khách,<br> Chào mừng đến với <span class="edit"> YummiYummi </span></h1>
			
			
		</div>
		<div class="col-login" style="margin-top: 4%; margin-bottom: 2%;">
			<div class="login-items">
				<label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
				<div class="form-login">
					<h2 style="text-align: center;">Login</h2>
					<form action="" method="POST">
					
						<div class="row">
							<div class="form-group col-xs-12">
								<label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
								<input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
							</div>           
						</div>
						

						<div class="row">
							<div class="form-group col-xs-12">
								<label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>            
								<input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">             
							</div>
							</div>

						<div class="row">
							<div class="form-group col-xs-4">
								<button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
							</div>
						</div>
						<label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>

					</form>
				</div>       
    		</div>
    </div>

    


    </body>
</html>