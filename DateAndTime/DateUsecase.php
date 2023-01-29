<?php

	echo date_create("now") -> format("Y-m-d  H:i:s"). "<br>";
	echo date_create("+6 days") -> format("Y-m-d  H:i:s");

	$strTime = strtotime("2005-10-06");
	echo date("d-m-y", $strTime);