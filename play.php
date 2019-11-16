<html>
	<head>
		<title>
			Terra Mystica Automa
		</title>
	</head>
	<body bgcolor="black">
		<?php 
			$opp = $_GET["opp"];
			$oppimg = $opp.".png";
			$rd = $_GET["rd"];
			$diff = $_GET["diff"];
			if(ISSET($_GET["setup"])){
				$setup = $_GET["setup"];
			}else{
				$setup = NULL;
			}
			$eor_ar = array(1,2,3,9,11,12,14,16);
			$score = NULL;
			$hash = NULL;
			$hash2 = NULL;
			$eor = NULL;
			$diff_ar = array("Easy","Normal","Hard","Expert");
			$difficulty = $diff_ar[$diff+1];
			$cur_rd = "The current round is </font><font color='red'><b>$rd</b>";
			
			if(isset($_GET["cards"])){
				$inplay = $_GET["inplay"];
				$cards = $_GET["cards"];
				$card_ar = explode("-",$cards);
				$count = count($card_ar);
				//echo "<font color=white>$count</font>";
				if((($count >= $rd+4+$diff AND in_array($card_ar[0], $eor_ar)) OR $count == $rd+6+$diff) AND $rd < 6){
					$eor = "<BR><BR><b>This is the END of round $rd.  Prepare for the next!<b>";
					$score = "<img src='eor' height='532px' width='760px'>";
					$cur_rd = NULL;
				}elseif((($count >= $rd+4+$diff AND in_array($card_ar[0], $eor_ar)) OR ($count == $rd+6+$diff)) AND $rd == 6){
					$eor = "<BR><BR><b>This is the END of the GAME.  Did you win?<b><BR><br> <a href='index.php' style='color:gray;'>Care to play again?</a>";
					$score = "<img src='eor' height='532px' width='760px'>";
					$hash = "<!--";
					$hash2 = "-->";
					$cur_rd = NULL;
				}
			}else{
				$cards = NULL;
				$card_ar = NULL;
				$eor = NULL;
				$score = NULL;
				$inplay = NULL;
			}
			//print_r($card_ar);
			if($eor != NULL){
				$end = 1;
			}else{
				$end = 0;
			}
		?>
		<center>
			<font color="gray">Difficulty: <b><?php echo $difficulty;?></b></font><BR>
			<img src="<?php echo $oppimg;?>" height="532px" width="380px">
			
			<?php echo $score;?><BR><BR>
			
			<?php
			
			?>
			
			<font color="gray"></font><font color="gray"><?php echo $cur_rd;?></font>
			<font color="gray"></font><font color="gray"><?php echo $eor;?></font><BR><BR>
			<form action="next.php" method="get">
				
				<input type="hidden" name="rd" value="<?php echo $rd;?>">
				<input type="hidden" name="cards" value="<?php echo $cards;?>">
				<input type="hidden" name="opp" value="<?php echo $opp;?>">
				<input type="hidden" name="end" value="<?php echo $end;?>">
				<input type="hidden" name="diff" value="<?php echo $diff;?>">
				<input type="hidden" name="inplay" value="<?php echo $inplay;?>">
				<?php echo $hash;?><input type="submit" value="Next card" style="height:100px;width:200px;"><?php echo $hash2;?>

			</form>	
			<BR><BR>
			<?php if($rd > 0){ ?>
				<img src="<?php echo $card_ar[0];?>.png" height="532px" width="380px"><img src="<?php echo $card_ar[1];?>.png" height="532px" width="380px">
			<?php }else{ ?>	
				<font color=gray>Setup</font><BR>
				<img src="<?php echo $setup;?>.png" height="532px" width="380px">
			<?php } ?>
			<BR><BR>
			<a href="rules.pdf" target="_blank" style="color:white">Solo game rules</a>
		</center>
	</body>



</html>