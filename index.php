﻿<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Magic Mirror</title>
	<meta name="description" content="The Magic Mirror">
	<meta http-equiv="refresh" content="600" /> <!-- Updates the whole page every 10 minutes (every 600 seconds) -->
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
		<script language="JavaScript"> <!-- Getting the current date and time and updates them every second -->
			setInterval(function() {
				var currentTime = new Date ( );
				var currentHours = currentTime.getHours ( );
				if (currentHours > 12) {
					currentHours=currentHours-12; //CONVERTING FROM MILITARY TIME
				}
				var currentMinutes = currentTime.getMinutes ( );
				var currentMinutesleadingzero = currentMinutes > 9 ? currentMinutes : '0' + currentMinutes; // If the number is 9 or below we add a 0 before the number.
				var currentDate = currentTime.getDate ( );

					var weekday = new Array(7);
					weekday[0] = "Sunday";
					weekday[1] = "Monday";
					weekday[2] = "Tuesday";
					weekday[3] = "Wednesday";
					weekday[4] = "Thursday";
					weekday[5] = "Friday";
					weekday[6] = "Saturday";
				var currentDay = weekday[currentTime.getDay()];

					var actualmonth = new Array(12);
					actualmonth[0] = "January";
					actualmonth[1] = "February";
					actualmonth[2] = "March";
					actualmonth[3] = "April";
					actualmonth[4] = "May";
					actualmonth[5] = "June";
					actualmonth[6] = "July";
					actualmonth[7] = "August";
					actualmonth[8] = "September";
					actualmonth[9] = "October";
					actualmonth[10] = "November";
					actualmonth[11] = "December";
				var currentMonth = actualmonth[currentTime.getMonth ()];

    var currentTimeString = "<h1>" + currentHours + ":" + currentMinutesleadingzero + "</h1><h2>" + currentDay + " " + currentMonth + " " + currentDate + "</h2>";
    document.getElementById("clock").innerHTML = currentTimeString;
}, 1000);
	</script>
</head>
<body>
<div id="wrapper">
	<div id="upper-left">
		<div id="clock"></div> <!-- Including the date/time-script -->
	</div>
	<!---->
	<div id="upper-right">
		<h2>...</h2>
		<?php



		?>
	</div>
	<!---->
	<div id="bottom">
		<h3>
		<?php // Depending on the hour of the day a different message is displayed.
			$now = date('H');
				if (($now > 06) and ($now < 10)) echo 'Good morning!';
				else if (($now >= 10) and ($now < 12)) echo 'Have a nice day!';
				else if (($now >= 12) and ($now < 14)) echo 'Time for lunch!';
				else if (($now >= 14) and ($now < 17)) echo 'Come and see!';
				else if (($now >= 17) and ($now < 20)) echo 'Time to start to think about dinner?';
				else if (($now >= 20) and ($now < 22)) echo 'Have a nice evening!';
				else if (($now >= 22) and ($now < 23)) echo 'Sleep tight, see you tomorrow!';
				else if (($now >= 00) and ($now < 06)) echo 'Shh, sleeping...';
			?>
		</h3>
	</div>
</div>
</body>
</html>
