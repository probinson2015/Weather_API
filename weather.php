<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Add description ">
    <title>Weather API</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
    	
  
    	$(document).ready(function() 
    	{
        	var html_str = "";
			$('form').submit(function() 
			{	
				var city = $('input[name="city"]').val()
        		var url = "http://api.openweathermap.org/data/2.5/weather/?q=" + city + "&units=imperial&appid=25de79d3466ec6e253acf7d5723907e0" 
        		console.log(url);
       			$.get(url, function(res) 
       			{
       				console.log(res);
       				html_str = "<h2>" + city + "</h2>";
       				html_str += "<h3>" + "Temperature: " + "</h4>";
       				html_str += res.main.temp + "&deg;F";
    				$("#result").html(html_str);
    			}, 'json');
   			 	// don't forget to return false so the page doesn't refresh
    		return false;
			 });
		});

	</script>
	<style>
		#weather {
			margin: 0 auto;
			width: 800px;
			text-align: center;
			margin-top: 250px;
		}
	</style>
</head>


	<body>

		<div id="weather">
		
			<form action="api.openweathermap.org/data/2.5/weather?" method="post">	
			<input type="text" name = "city" placeholder = "Enter city">
			<input type="submit" value="Search Weather">
			</form>
			
			<div id="result">
			</div>
		
		</div>

	</body>

</html>