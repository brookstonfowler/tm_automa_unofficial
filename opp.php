<?php
	$opp = $_GET["opp"];
	$opps = array("alc","aur","cha","cul","dar","dwa","eng","fak","gia","hal","mer","nom","swa","wit");
	if(ISSET($_GET["exp"])){
		array_push($opps,"aco","dra","ice","riv","sha","yet");
	}
	//print_r($opps);
	if($opp == "random"){
		$rand = array_rand($opps);
		$opp = $opps[$rand];
	}
	$diff = $_GET["diff"];
	$setup = mt_rand(1,6);

	header("Location: play.php?opp=$opp&rd=0&diff=$diff&setup=$setup");

?>