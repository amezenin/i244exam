

<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" type="text/css" href="style.css"  /> 
    <meta charset="utf-8"/>
	<title>Text</title>
	<script language="javascript">
startdate = new Date();
clockStart = startdate.getTime();
function initStopwatch() {
  var thisTime = new Date(); 
  return (thisTime.getTime() - clockStart)/1000; 
}
function getSecs() {
  var tSecs = Math.round(initStopwatch());
  var iSecs = tSecs % 60;
  var iMins = Math.round((tSecs-30)/60);
  var sSecs ="" + ((iSecs > 9) ? iSecs : "0" + iSecs);
  var sMins ="" + ((iMins > 9) ? iMins : "0" + iMins);
  document.getElementById("timer-counter").innerHTML = sMins+":"+sSecs;
  setTimeout('getSecs()', 1000); 
}
</script>
  </head>
  <body onLoad="getSecs()">
  <div class="proov"><h1>Text</h1></div>
	 <div class="soodapohi">
		<form method="POST" action=''>
	<table>
		<tr><td></td><td>Loo lihtne lehekülg märkmete tegemiseks. Igal kasutajal on oma isiklikud märkmed..</td></tr>
		

	
	</table>
	</div>
	Вы здесь уже:
 <span id='timer-counter' style='color:red;font-size:150%;font-weight:bold;'></span>
 минут/секунд.
	</form>
   
	
	
  </body>
</html>