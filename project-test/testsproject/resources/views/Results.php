<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .jumbotron {
      margin-bottom: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #f2f2f2;
      color: white;
      padding: 25px;
      
      body {
  /* Remove the jumbotron's default bottom margin */ 
    background-repeat: no-repeat, repeat;
        background-color: #cccccc;
    /* Add a gray background color and some padding to the footer */
    /*     background-color: #cccccc; */
}
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

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
        <li class="active"><a href="Main.php">Home</a></li>
        <li ><a href="Questions.php">Beging a test</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li ><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li ><a href="Registration.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
      <h1>Tulemus:</h1>
      <p>Sa said 51%</p>
      <hr>
      <h3><a href="Main.php"><button type="button" class="btn btn-primary btn-lg btn-block">Tagasi</button></a></h3>
    </div>
    <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>