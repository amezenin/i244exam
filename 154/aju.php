<?php



if($_POST['code']) {
	$a = 'parool';
	if($_POST['code'] == $a){
		echo '<a href="http://188.226.141.63/i244exam/154/fail/ribalka.zip">Ska4atj fail</a>' ;
} else {
echo "Код введен неправильно! Попробуйте еще раз.";
}
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