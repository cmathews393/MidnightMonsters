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

<div id="servertable">
<table>
	<tr>
		<th>Server Name</th>
		<th>Game Name</th>
		<th>Players</th>
		<th>Map</th>
		<th>Direct Connect (No longer working for some servers, Steam issue)</th>
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
	<tr>
		<td><!-- <a id="info" href="INS1.php"> -->
			<?php if ($PZCasualInfo ['HostName'] != null)
				{
					echo "<a href=INS1.php>";
					print_r($PZCasualInfo ['HostName']);
					echo "</a>";
					echo "</td>";
					echo "<td><p> Project Zomboid </p>	</td>";
					echo "<td>";
					print_r($PZCasualInfo ['Players']);
					echo "/";
					print_r($PZCasualInfo ['MaxPlayers']);
					echo "</td>";
					echo "<td> Muldraugh";
					//print_r($PZCasualInfo ['Map']); 
					echo "</td>";
					echo "<td>";
					echo "<a href=steam://connect/";
					print(PZCasualADDR);
					echo ":";
					print(PZCasualPORT);
					echo ">";
					echo "CONNECT</a></td>";
					echo "</tr>";
				}
				else 
				{
					print ("Project Zomboid Casual");
					echo "</td>";
					echo "<td><p> Project Zomboid </p>	</td>";
					echo "<td> <p id=\"error\" >ERROR! </p> </td>";
					echo "<td> <p id=\"error\" >ERROR! </p> </td>";
					echo "<td> <p id=\"error\" >OFFLINE! </p> </td> </tr>";
				}
				?>
	<tr>
		<td><!-- <a id="info" href="INS1.php"> -->
			<?php if ($PZHardcoreInfo ['HostName'] != null)
				{
					echo "<a href=INS1.php>";
					print_r($PZHardcoreInfo ['HostName']);
					echo "</a>";
					echo "</td>";
					echo "<td><p> Project Zomboid </p>	</td>";
					echo "<td>";
					print_r($PZHardcoreInfo ['Players']);
					echo "/";
					print_r($PZHardcoreInfo ['MaxPlayers']);
					echo "</td>";
					echo "<td> Muldraugh";
					// print_r($PZHardcoreInfo ['Map']); 
					echo "</td>";
					echo "<td>";
					echo "<p>";
					print(PZHardcoreADDR);
					echo ":";
					print(PZHardcorePORT);
					echo "</p>";
					echo "</td>";
					echo "</tr>";
				}
				else 
				{
					print ("Project Zomboid Hardcore");
					echo "</td>";
					echo "<td><p> Project Zomboid </p>	</td>";
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
