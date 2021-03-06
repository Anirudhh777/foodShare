<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chef page</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/views/index/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/views/how_it_works/">How It Works</a></li>
            <li><a href="/views/chef">Chef</a></li>
            <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/views/dashboard/">Dashboard</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logoff">Sign Out</a></li>              
                </ul>
              </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="profile">
      <div class ="container">
        <div class="row">
              <div class="col-md-4">
                <div class="profile_photo">
                  <h3>Chef Photo</h3>
                  <img class = "user_photo" src = "/assets/images/chef1.jpg" alt="chef photo">
                </div>
              </div>
              <div class="col-md-8">
                <div class="description">                 
                  <h3>Intro</h3>
                  <button class="form-inline">Edit</button>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="/views/reviews"><h3>Reviews</h3></a>
                </div>
              </div>
              </div>
          </div>
      </div>
    </div> <!-- End Profile header -->   
    <div class="main-content text-center">
      <div class ="container">
          <div class="row">
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/japanese1.jpeg">
                   <div class="mask">  
                   <h2>Title</h2>  
                   <p>Sushi Nom Nom Nom</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/ramen.jpeg">
                   <div class="mask">  
                   <h2>Title</h2>  
                   <p>Tonkotsu Ramen</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/japanese3.jpeg">
                   <div class="mask">  
                   <h2>Title</h2>  
                   <p>Sushi Feast</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/dining_table.jpg">
                   <div class="mask">  
                   <h2>Title</h2>  
                   <p>My dinning table</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/japanese1.jpeg">
                   <div class="mask">  
                   <h2>Title</h2>  
                   <p>Your Text</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/japanese1.jpeg">
                   <div class="mask">  
                   <h2>LOCATION</h2>  
                   <p>My Location</p>  
                       <a href="#" class="info">Read More</a>  
                   </div>  
                </div> 
              </div>
          </div>        
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p>Link</p>
          </div>
          <div class="col-md-4">
            <p>Link</p>
          </div>
          <div class="col-md-4">
            <p>Link</p>
          </div>
        </div>
    </div>
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>