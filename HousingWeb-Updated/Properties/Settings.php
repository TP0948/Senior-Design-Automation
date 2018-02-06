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
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	
	.btn-group button {
    background-color: #337ab7; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 14px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}

 .pIMG {
    max-width:100%;
    max-height:100%;
      }
  </style>

</head>
<body>




<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h1 style="text-align:center;   margin:0 auto;">My Properties</h1>
        
      </div>
     
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
		  
            <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/GraceCenter.jpg"> 
            <p>Grace Center Low Income Housing</p> 
			 <div class="btn-group">
				<button>Manage</button>
				<button>Analytics</button>
				<button>Settings</button>
			</div> 
          </div>
        </div>
        <div class="col-sm-4">
           <div class="well">
            <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/Oakland.jpg"> 
            <p>Oakland University</p> 
			 <div class="btn-group">
				<button>Manage</button>
				<button>Analytics</button>
				<button>Settings</button>
			</div> 
          </div>
        </div>
        <div class="col-sm-4">
           <div class="well">
           <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/Mcdonalds.jpg"> 
            <p>Mcdonalds</p> 
			 <div class="btn-group">
				<button>Manage</button>
				<button>Analytics</button>
				<button>Settings</button>
			</div>  
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

</body>
</html>
