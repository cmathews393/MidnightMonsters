<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Servers</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<div>
<div id="header">
<h1>MIDNIGHT MONSTERS</h1>
</div>
<div id="nav">
	<ul>
	  <li><a href="Index.php">Home</a></li>
	  <li><a href="Servers.php">Servers</a></li>
	  <li><a href="About.php">About</a></li>
	  <li><a href="Contact.php">Contact</a></li>
	  <li><a href="https://forums.midnightmonsters.net">Forums</a></li>
	</ul>
</div>
</div>
<!-- SOURCE QUERY BLOCK - UPDATE ADDRESSES/ADD SERVERS HERE -->
<?php include 'phpcall.php' ?>
<script type="text/javascript" src="https://midnightmonsterssupport.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/1jmxwi/b/9/c95134bc67d3a521bb3f4331beb9b804/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=97032f4f"></script>


<div id="servertable">
<table>
	<tr>
		<th>Server Name</th>
		<th>Game Name</th>
		<th>Players</th>
		<th>Map</th>
		<th>Direct Connect</th>
	</tr>
	<tr>
		<td><!-- <a id="info" href="KF2.php"> -->
		<?php if ($KFInfo ['HostName'] != null)
			{
				echo "<a href=KF.php>";
				print_r($KFInfo ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> Killing Floor 2 </p>	</td>";
				echo "<td>";
				print_r($KFInfo ['Players']);
				echo "/";
				print_r($KFInfo ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($KFInfo ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(KFADDR);
				echo ":";
				print(KFPORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("Killing Floor 2 #1");
				echo "</td>";
				echo "<td><p> Killing Floor 2 </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
	<tr>
		<td><!-- <a id="info" href="KF2.php"> -->
		<?php if ($PZInfo ['HostName'] != null)
			{
				echo "<a href=PZ1.php>";
				print_r($PZInfo ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> Project Zomboid </p>	</td>";
				echo "<td>";
				print_r($PZInfo ['Players']);
				echo "/";
				print_r($PZInfo ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($PZInfo ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(PZADDR);
				echo ":";
				print(PZPORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("Project Zomboid #1");
				echo "</td>";
				echo "<td><p> Project Zomboid </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
	<tr>
		<td><!-- <a id="info" href="CSGO1.php"> -->
		<?php if ($CSGO1Info ['HostName'] != null)
			{
				echo "<a href=CSGO1.php>";
				print_r($CSGO1Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> Counter-Strike: Global Offensive </p>	</td>";
				echo "<td>";
				print_r($CSGO1Info ['Players']);
				echo "/";
				print_r($CSGO1Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($CSGO1Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(CSGO1ADDR);
				echo ":";
				print(CSGO1PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("CSGO #1");
				echo "</td>";
				echo "<td><p> Counter-Strike: Global Offensive </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
		<tr>	
		<td><!-- <a id="info" href="ARK1.php"> -->
		<?php if ($ARK1Info ['HostName'] != null)
			{
				echo "<a href=ARK1.php>";
				print_r($ARK1Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td>";
				print_r($ARK1Info ['Players']);
				echo "/";
				print_r($ARK1Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($ARK1Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(ARK1ADDR);
				echo ":";
				print(ARK1PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("ARKSERVER #1");
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
	<tr>	
		<td><!-- <a id="info" href="ARK2.php"> -->
		<?php if ($ARK2Info ['HostName'] != null)
			{
				echo "<a href=ARK2.php>";
				print_r($ARK2Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td>";
				print_r($ARK2Info ['Players']);
				echo "/";
				print_r($ARK2Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($ARK2Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(ARK2ADDR);
				echo ":";
				print(ARK2PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("ARKSERVER #2");
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
	<tr>	
		<td><!-- <a id="info" href="ARK3.php"> -->
		<?php if ($ARK3Info ['HostName'] != null)
			{
				echo "<a href=ARK3.php>";
				print_r($ARK3Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td>";
				print_r($ARK3Info ['Players']);
				echo "/";
				print_r($ARK3Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($ARK3Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(ARK3ADDR);
				echo ":";
				print(ARK3PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("ARKSERVER #2");
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>
<tr>	
		<td><!-- <a id="info" href="ARK4.php"> -->
		<?php if ($ARK4Info ['HostName'] != null)
			{
				echo "<a href=ARK4.php>";
				print_r($ARK4Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td>";
				print_r($ARK4Info ['Players']);
				echo "/";
				print_r($ARK4Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($ARK4Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(ARK4ADDR);
				echo ":";
				print(ARK4PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("ARKSERVER #2");
				echo "</td>";
				echo "<td><p> ARK: Survival Evolved </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>	
	<tr>	
		<td><!-- <a id="info" href="INS1.php"> -->
		<?php if ($INS1Info ['HostName'] != null)
			{
				echo "<a href=INS1.php>";
				print_r($INS1Info ['HostName']);
				echo "</a>";
				echo "</td>";
				echo "<td><p> Insurgency </p>	</td>";
				echo "<td>";
				print_r($INS1Info ['Players']);
				echo "/";
				print_r($INS1Info ['MaxPlayers']);
				echo "</td>";
				echo "<td>";
				print_r($INS1Info ['Map']); 
				echo "</td>";
				echo "<td>";
				echo "<a href=steam://connect/";
				print(INS1ADDR);
				echo ":";
				print(INS1PORT);
				echo ">";
				echo "CONNECT</a></td>";
				echo "</tr>";
			}
			else 
			{
				print ("INSURGENCY #1");
				echo "</td>";
				echo "<td><p> Insurgency </p>	</td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >ERROR! </p> </td>";
				echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
			}
			?>

</table>
	<body id="uptime">
		<h1>For more detailed player stats, click on the server name. For uptime percentages, see the link below.</h1>
		<p><a href="https://status.midnightmonsters.net/status/servers" target="_blank">Uptime Kuma</a></p>
	</body>
</div>
	<div id="serverspage">
<footer>
	Server statistics pulled using the excellent <a href=https://github.com/xPaw/PHP-Source-Query>SourceQuery</a> library from xPaw. 
</footer>
</div>

</html>
