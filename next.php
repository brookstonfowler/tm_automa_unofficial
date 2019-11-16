<?php

$rd = $_GET["rd"];
$end = $_GET["end"];
$diff = $_GET["diff"];
$opp = $_GET["opp"];
//echo "diff".$diff;


if($rd == 0){
	$card_select = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6);
	if($diff == -1){
		array_pop($card_select);
	}elseif($diff == 1){
		$card_select[] = 7;
	}elseif($diff == 2){
		$card_select[] = 7;
		$card_select[] = 8;
	}
	$new_rd = 1;
	$new_card = mt_rand(7+$diff, 16);
	$card_select[$new_card] = $new_card;
	//print_r($card_select);
}elseif($end == 1){
	$card_select = explode("-",$_GET["inplay"]);
	$new_rd = $rd+1;
	//print_r($card_select);
	//echo "<BR><BR>";
	foreach($card_select as $value){
		$new_select[$value] = $value;
	}
	//print_r($new_select);
	//echo "<BR><BR>";
	$card_select = $new_select;
	/*while(
		in_array($new_card = array_rand(range(6,16)),$card_select)	
	);*/
	$new_card = 1;
	while(in_array($new_card,$card_select)){
		$new_card = mt_rand(7,16);
	}
	//echo $new_card."<BR>";
	$card_select[$new_card] = $new_card;
	//print_r($card_select);
	//echo "<BR><BR>";
}else{
	$card_select = explode("-",$_GET["inplay"]);
	$new_rd = $rd;
	foreach($card_select as $value){
		$new_select[$value] = $value;
	}
	print_r($new_select);
	echo "<BR><BR>";
	$card_select = $new_select;
}

$card_ar = explode("-",$_GET["cards"]);
//print_r($card_ar);

if($new_rd > $rd){
	$rd++;
	$card_ar = array();

	$next = array_rand($card_select);
	//echo $next."<BR><BR>";
	array_unshift($card_ar,$next);
	//print_r($card_ar);

}

print_r($card_select);
echo "<BR><BR>";
	
while(
	in_array(($nexter = array_rand($card_select)),$card_ar)
);
echo "<BR><BR>$nexter<BR><BR>";
array_unshift($card_ar,$nexter);

print_r($card_ar);


$cards = implode("-",$card_ar);
echo "<BR><BR>$cards<BR><BR>";

$inplay = implode("-",$card_select);
//print_r($card_select);
//echo $inplay;


Header("Location: play.php?rd=$rd&cards=$cards&opp=$opp&diff=$diff&inplay=$inplay");

?>