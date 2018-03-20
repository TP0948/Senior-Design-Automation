$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/housingweb-updated/GetDataTemperature2.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var Temp = {
				Temperature1: [],
				Date1: []
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].Sensor == "Temperature"  && data[i].Location == "Room4") {
					Temp.Temperature1.push(data[i].Value);
					Temp.Date1.push(data[i].Date);
			}}
				
			console.log(Temp);

			//get canvas
			var ctx = $("#line-chartcanvas");

			var data = {
				labels : Temp.Date1,
				datasets : [
					{
						label : "Temperature Sensor",
						data : Temp.Temperature1,
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Temperature Information",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				}
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});