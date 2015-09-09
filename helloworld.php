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