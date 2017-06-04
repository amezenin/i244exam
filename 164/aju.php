<?php

if (!isset($_SESSION)) {
	session_start();
		
	if (!isset($_SESSION['start'])) {
		$start = time();
		//echo time() . '<br>';
		
		$_SESSION['start'] = $start;
		//echo $_SESSION['start'];
	
	}
}



if($_POST['log']) {
$start = $_SESSION['start'];

 $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
	session_write_close();
    //session_destroy();
    
	
	$finished = time();
	$duration = $finished - $start;
	echo 'sessiooni pipkkus: ' . $duration . '<br>';
	echo $start . '<br>';
	echo $finished . '<br>';
	
	//

	
}		
		
		
		
	
	
 
			
  
  
  
  
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
				
				/*$res = mysqli_query($L, "SELECT li, COUNT(li) AS 'Num' FROM amezenin_like GROUP BY li;");
				
				while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		
			//echo "<br> id: ".$row['id']."\n";
		//echo "<br> Likes: ".$row['li']."\n"; //вывести строки из столбца текст
		echo "Likede arv: ".$row['Num']."\n"; //вывести количество строк
		
	
				}*/


?>