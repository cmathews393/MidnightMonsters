<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Source Query PHP Library</title>
	
	<link rel="stylesheet" href="stylesheet.css">
</head>
<?php include 'phpcall.php';?>
<body>
<div id="header">
	<h1>MIDNIGHT MONSTERS</h1>
</div>
<div id="nav">
	<ul>
	  <li><a href="Index.php">Home</a></li>
	  <li><a href="Servers.php">Servers</a></li>
	  <li><a href="About.php">About</a></li>
	  <li><a href="Contact.php">Contact</a></li>
	</ul>
</div>
<div id="servername">
<h1><?php print_r($KFInfo ['HostName'])?></h1>
<?php if( $KFInfo ['HostName'] !=null)
		echo "<h2 id=\"serverstatus\">Server Status: </h2><h2 id=\"statusgreen\">Online</h2>";
	else
		echo "<h2 id=\"serverstatus\">Server Status: </h2><h2 id=\"statusred\">Offline</h2>";
	?>
	
</div>
<div id="servertable">
				<table>
					<tr>
							<th>Player Name</th>
							<th>Kills</th>
							<th>Time</th>
						</tr>
					<tbody>
	<?php if( !empty( $KFPlayers ) ): ?>
	<?php foreach( $KFPlayers as $KFPlayer ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $KFPlayer[ 'Name' ] ); ?></td>
							<td><?php echo $KFPlayer[ 'Frags' ]; ?></td>
							<td><?php echo $KFPlayer[ 'TimeF' ]; ?></td>
						</tr>
	<?php endforeach; ?>
	<?php else: ?>
						<tr>
							<td colspan="3">No players online :(</td>
						</tr>
	<?php endif; ?>
					</div>
</body>
<div>
<footer>
	Server statistics pulled using the excellent <a href=https://github.com/xPaw/PHP-Source-Query>SourceQuery</a> library from xPaw. 
</footer>
</div>
</html>