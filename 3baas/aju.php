<?php

  
 $host="localhost";
  $user="root";
  $pass="ghbdtn123";
  $db="proov";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));

	$userhash = $_COOKIE["userhash"]; // Узнаём, что за пользователь
  if (!$userhash) {
    /* Если это новый пользователь, то добавляем ему cookie, уникальные для него */
    $userhash = uniqid();
    setcookie("userhash", $userhash, 0x6FFFFFFF);
  }
  $ip = $_SERVER["REMOTE_ADDR"]; // Получаем ип
  
	  $sql = "INSERT INTO amezenin_ip (ip) VALUES ('$ip')";
  $result= mysqli_query($L, $sql);
  
  
  
  
  /*$mysqli->query("INSERT INTO amezenin_kul (ip) VALUES ( '$ip')"); // Добавляем запись
  $mysqli->close(); // Закрываем соединение*/
	
	//берём всё данные из таблицы и пробегаемся по строкам
		/*$res = mysqli_query($L, "SELECT * FROM amezenin_ip");
		while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		
			echo "<br> id: ".$row['id']."\n";
		echo "ip: ".$row['ip']."\n"; //вывести строки из столбца текст
		
		
	
				}*/
				
				$res = mysqli_query($L, "SELECT ip, COUNT(ip) AS 'Num' FROM amezenin_ip GROUP BY ip;");
				
				while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		
			//echo "<br> id: ".$row['id']."\n";
		echo "<br> ip: ".$row['ip']."\n"; //вывести строки из столбца текст
		echo "sisselogimise arv: ".$row['Num']."\n"; //вывести строки из столбца текст
		
	
				}


?>