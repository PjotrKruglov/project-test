<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style> 
/*
background-image: url("http://genchi.info/image/full-hd-wallpapers-1920x1080-7.jpg");
*/
.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
.jumbotron {
      margin-bottom: 0;
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
body {
  /* Remove the jumbotron's default bottom margin */ 
    background-repeat: no-repeat, repeat;
        background-color: #cccccc;
    /* Add a gray background color and some padding to the footer */
    /*     background-color: #cccccc; */
}
.error {color: #FF0000;}
</style>

<div class="jumbotron">
  <div class="container text-center">
    <h1>IT test</h1>      
    <p>Veebiprogrameerimine</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Main.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="Main.php">Home</a></li>
        <li><a href="Questions.php">Begin a test</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li ><a href="Registration.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>
      </ul>
    </div>
  </div>
</nav>

    
<div class='container'>
  
  <div class="form-group">

  <div class="form-group justify-content-center">
  	<label for="mail">E-mail:</label>
  	<input type="email" class="form-control" id="mail" name="ml" maxlength="25" required>
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" maxlength="16" required>
  </div>

<div class="btn-group btn-group-lg">
  <button type="button" class="btn btn-primary" onclick="form.submit();">Continue</button>
</div>

  </div>
</div>
</form>
</body>
</html>