<?php
	$first_name = "Hendrik";
	$last_name = "Seemen";
	
	echo $first_name." ".$last_name;
?>
<br>
<?php


	$age = 21;
	
	//testib loogikat, juhul kui vanus on väiksem kui 18, siis kirjuta "alaealine", muul juhul "täisealine"
	if($age < 18) {
		//tõene
		
		echo "alaealine";
		
	} else {
		//väär
		
		echo "täisealine";
	}

?>
<br>
<?php
	
	//vastavalt vanusele trükime niimitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		//tegevus mis kordub
		echo "palju ";
		
		
	}
	
	echo "õnne";
	
?>
<br>
<?php

	// Trüki välja kuupäev kujul: nädalapäev, kp kuu aasta
	
	echo date ("l, d F Y");
	
	
?>