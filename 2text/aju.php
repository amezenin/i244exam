<?php

  

	
	
	/*$userhash = $_COOKIE["userhash"]; // Узнаём, что за пользователь 
  if (!$userhash) {
    //Если это новый пользователь, то добавляем ему cookie, уникальные для него 
   $userhash = uniqid();
   
    setcookie("userhash",  0x6FFFFFFF);
	
 }*/
 
 
 
 if(!isset($_SESSION)){
	 session_start();
	 //logime IP ja aja logifaili
		$logfile = "text.txt";
		$ip = $_SERVER['REMOTE_ADDR'];
		$line = date('Y-m-d H:i:s') . " - " . $ip;	
		file_put_contents($logfile, $line . PHP_EOL, FILE_APPEND);
		
		
 $logfile = "text.txt";
			$data = file($logfile); //4itaem infu po strokam
		$lines = count(file($logfile));
  		echo "Sellel lehel on $lines külastust";
 
 }
		
	
	//loeme mitu rida on logis ja saama külastuste arvu.
  		
  		
			

		
 
	
	/*$logfile = "kylalised.txt";
	$ip = $_SERVER['REMOTE_ADDR'];
  
	$t = date('Y-m-d H:i:s') . " - " . $ip;
	file_put_contents($logfile, $t . PHP_EOL, FILE_APPEND);
	
		//$logfile = "kylalised.txt";
  		$data = file($logfile); // infa po strokam
		$c = count(file($logfile)); //skok strok
  		echo "Sellel lehel on $c külastust";*/
	
	


?>