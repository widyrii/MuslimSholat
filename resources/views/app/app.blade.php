<!DOCTYPE html>
<html>
<head>
	<title>TimeShalat</title>
	<!-- Compiled and minified CSS -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">   
 	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <script src="https://use.fontawesome.com/ecc46449ca.js"></script>
    <link rel=”icon” type=”image/png” href=”https://titatootito.files.wordpress.com/2013/05/fix-anak-shalat.jpg”>
</head>
<body>
	@yield('content')
	<script
	  src="https://code.jquery.com/jquery-2.2.4.js"
	  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	  crossorigin="anonymous"></script>
	<!-- Compiled and minified JavaScript -->
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		// var lat;
		// var long;
		// var time;
		// var timezone;
		// var country;
		// var city;
		// var date;

		// $.getJSON('http://ipinfo.io', function(data)){
		// 	console.log(data);
		// 	date = moment().format("ddd, MMMM Do YYYY");
		// 	time = moment().unix();
		// 	lat = data.loc.split(',')[0];
		// 	long 
		// }
		jQuery(function($) {
		 $.getJSON('http://muslimsalat.com/daily.json?key=db730d1fb6f81f2b997a7ef568743fe3&jsoncallback=?', function (times)
		 {
			 // $('.prayerTimesExample')
			 // .append('Today in '+times.title)
			 // .append(' Fajr: '+times.items[0].fajr)
			 // .append(' Dhuhr: '+times.items[0].dhuhr)
			 // .append(' Asr: '+times.items[0].asr)
			 // .append(' Maghrib: '+times.items[0].maghrib)
			 // .append(' Isha: '+times.items[0].isha)
			 // .append(' by MuslimSalat.com');
			 $("#place").html(times.state + ", " + times.country);
			 $("#SubuhTime").html(times.items[0].fajr);
			 $("#DzuhurTime").html(times.items[0].dhuhr);
			 $("#AsharTime").html(times.items[0].asr);
			 $("#MaghribTime").html(times.items[0].maghrib);
			 $("#IsyaTime").html(times.items[0].isha);
		 });
	});
	</script>
</body>
</html>