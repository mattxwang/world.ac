// I tried to make it as simple as possible
function getTimeRemaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );

	if (t > 0){
		return days + " Days, " + hours + " Hours, " + minutes + " Minutes, and " + seconds + " Seconds!";
	}
	else {
		return "February 1st 2016";
	}
}