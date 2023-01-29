<?php

	echo "Current date: " . date("d-m-y"). "<br>";
	echo "Current date: " . date("D-M-Y"). "<br>";

	echo "Current date and time: " . date("d-m-y h:i:s:a"). "<br>";
	echo "Current date and time: " . date("D-M-Y H:i:s:A"). "<br>";
	//time in milliseconds
	echo "Current time in milliseconds: ". time()."<br>";

	//increment time 
	$time = time() + 1000;
	echo "Current date: " . date("d-m-y h:i:s:a", $time). "<br>"; 

