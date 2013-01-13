<?php
	$lipsum2 = array("Arthur Dent", "Zaphod Beeblebrox", "Ford Prefect", "Tricia Macmillian", "Deep Thought", "Eccentrica Gallumbits", "Eddie", "Fenchurch", "Frankie", "Benjy", "Gag Halfrunt", "Gail Andrews", "Vroomfondel","Prostetnic Vogon Jeltz", "Random Dent", "Rob McKenna", "Stavro Mueller", "Trin Tragula", "Zaphod Beeblebrox IV", "Zarniwoop", "Zarquon");
	$str2 =  $lipsum2[rand(0,count($lipsum2))-1];
	echo $str2;
?>
