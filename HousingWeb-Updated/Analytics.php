<!DOCTYPE html>




<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
  
  <script src="http://d3js.org/d3.v3.min.js"></script>
    
  
  <style>
  
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	

.well.well1.well2.well3.well4.well5.well6.well7.well8.well9.well10.wellHeader{
	flex: 1 1 auto;
}

	  
	  .MainContent{
		  padding-top: 75px;
	  }

body { font: 12px Arial;}

path { 
	stroke: steelblue;
	stroke-width: 2;
	fill: none;
}

.axis path,
.axis line {
	fill: none;
	stroke: grey;
	stroke-width: 1;
	shape-rendering: crispEdges;
}

div.tooltip {
  position: absolute;	
  text-align: center;	
  width: 60px;	
  height: 28px;		
  padding: 2px;	
  font: 12px sans-serif;	
  background: lightsteelblue;	
  border: 0px;					
  border-radius: 8px;
 /*  pointer-events: none;	This line needs to be removed */
	
}	  

  </style>
</head>
<body>
<!-- ______________________________________Navigation__________________________________ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Home4.php">Housing automation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	
	

<div class="MainContent">
    <div class="col-sm-12">
      <div class="wellHeader">
        <h1 style="text-align:center;   margin:0 auto;">My Properties</h1>
		<button onclick="location.href = 'http://localhost/HousingWeb-Updated/NewProperty2.php';" id="NewProperty">Manage/Add Property</button>
		
      </div>
	  <div class="row">
		<div class="col-sm-4">
			<div class="well0">
			
			<svg width="960" height="500"></svg>
			
			<script>
			
			/*
			
			var svg = d3.select("svg"),
			margin = {top: 20, right: 20, bottom: 30, left: 50},
			width = +svg.attr("width") - margin.left - margin.right,
			height = +svg.attr("height") - margin.top - margin.bottom,
			g = svg.append("g").attr("transform", "translate(" + margin.left + "," + margin.top + ")");
*/
			var parseTime = d3.time.format("%d-%b-%y");
/*
			var x = d3.time.scale()
			.rangeRound([0, width]);

				
			var y = d3.scale.linear()
			.rangeRound([height, 0]);

			var line = d3.svg.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.close); });
		*/	
			

			d3.json("GetDataTemperature.php", function(error, d) {
			d.date = parseTime.parse(d.date);
			d.Sensor = +d.Sensor;
			return d;
			}, function(error, data) {
			if (error) throw error; });
			
			/*

			x.domain(d3.extent(data, function(d) { return d.date; }));
			y.domain(d3.extent(data, function(d) { return d.close; }));

			g.append("g")
			.attr("transform", "translate(0," + height + ")")
			.call(d3.axisBottom(x))
			.select(".domain")
			.remove();

			g.append("g")
			.call(d3.axisLeft(y))
			.append("text")
				.attr("fill", "#000")
				.attr("transform", "rotate(-90)")
				.attr("y", 6)
				.attr("dy", "0.71em")
				.attr("text-anchor", "end")
				.text("Price ($)");

			g.append("path")
				.datum(data)
				.attr("fill", "none")
				.attr("stroke", "steelblue")
				.attr("stroke-linejoin", "round")
				.attr("stroke-linecap", "round")
				.attr("stroke-width", 1.5)
				.attr("d", line);
});
			
			*/
			
			</script>
			
			
			
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well1">
			
			
			
			
	
			</div>
			</div>
		
	
		<div class="col-sm-4">
			<div class="well2">
	
			</div>
			</div>
		
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="well4">
	
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well5">
	
			</div>
			</div>
	
		<div class="col-sm-4">
			<div class="well6">
	
			</div>
			</div>
		
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="well7">
	
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well8">
	
			</div>
			</div>
	
		<div class="col-sm-4">
			<div class="well9">
	
			</div>
			</div>
			</div>
		<div class="row">
		<div class="col-sm-4">
			<div class="well10">
	
			</div>
			</div>
			</div>
			</div>
</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>
