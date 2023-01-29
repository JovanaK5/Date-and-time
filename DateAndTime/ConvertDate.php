<?php

	//convert date form date array
	$dateArr = getdate();
	#var_dump($dateArr);

	foreach ($dateArr as $format => $value) {
		echo "$format => $value" . "<br>";
	}

	echo "Month: ".getdate()["month"]  . "<br>";
	echo "Year: ".$dateArr["year"];