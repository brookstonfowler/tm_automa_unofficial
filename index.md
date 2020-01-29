<html>
	<head>
		<title>
			Terra Mystica Automa - Select your opponent's faction
		</title>
	</head>
	<body bgcolor="black">
		<BR><BR><BR>
		<center>
		<form action="opp.php" method="get">
			<input type="checkbox" value=1 name="exp"><font color=gray>Include Fire and Ice expansion races for random opponent<BR><BR>
			<select name="opp" style="height:100px;width:200px;">
				<option value="random">Random</option>
				<option value="alc">Alchemists</option>
				<option value="aur">Auren</option>
				<option value="cha">Chaos Magicians</option>
				<option value="cul">Cultists</option>
				<option value="dar">Darklings</option>
				<option value="dwa">Dwarfs</option>
				<option value="eng">Engineers</option>
				<option value="fak">Fakirs</option>
				<option value="gia">Giants</option>
				<option value="hal">Halflings</option>
				<option value="mer">Mermaids</option>
				<option value="nom">Nomads</option>
				<option value="swa">Swarmlings</option>
				<option value="wit">Witches</option>
				<option value="aco">Acolytes</option>
				<option value="dra">Dragonlords</option>
				<option value="ice">Ice Maidens</option>
				<option value="riv">Riverwalkers</option>
				<option value="sha">Shapeshifters</option>
				<option value="yet">Yetis</option>
			</select>	
			<BR><BR>
			<select name="diff" style="height:100px;width:200px;">
				<option value="-1"> Easy</option>
				<option value="0" selected> Normal</option>
				<option value="1"> Hard</option>
				<option value="2"> Expert</option>
			</select>
			<BR><BR>
			<input type="submit" value="submit" style="height:100px;width:200px;">
		</form>
		<BR><BR>
		<a href="rules.pdf" target="_blank" style="color:white">Solo game rules</a>
		</center>
	
	</body>



</html>
