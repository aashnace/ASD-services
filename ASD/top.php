<?php
	session_start();	
?>

<table  width ="100%"  style="z-index=5000;position:relative" border=0>
	<tr>
		<td align=left width="50%">
	<table border=0>
	<tr>
		<td><a href="index.html"><img src="asd.jpg"  height="65" width="130" ></td>
	</tr>
</table>
</td>

<td>
<table align=right>
	<tr>
	<td>
		<?php
		if($_SESSION['userid'] == '')
		{
			echo "<p align=right class='textdecoration'>Welcomes, Guest</p>";
		}
		else
		{
			if($_SESSION['userType'] == 'E')
			{
				echo "<p align=right class='textdecoration'>Welcome, Er.".$_SESSION['userid']."<a href='logout.php'> Logout</a></p>";
			}
			else
			{
				echo "<p align=right class='textdecoration'>Welcome, ".$_SESSION['userid']."<a href='logout.php'> Logout</a></p>";
			}
		}
		?>
		<a href="index.php">Home |</a>

		<?php
		if($_SESSION['userid'] == '')
		{
			echo "<a href='login.php'>Login/Sign Up |</a> ";
		}
		?>
		<a href="prof.php">Become a Professional |</a>

		<?php
		if($_SESSION['userid'] != '')
		{
			?>
			

			<?php
			if($_SESSION['userType'] == 'E')
			{
				?><a href='myTask.php'>My Task |</a>
			<?php
			}
			else
			{
				?><a href='myOrders.php'>My Orders |</a>
				<a href='mycart.php'>Cart (<?php include 'itemCounter.php'?>) |</a>
			<?php
			}
			?>

			<?php
		}
		?>

		<a href="contactUs.php">Contact Us</a>
	</td>
	</tr>
</table>
</td>
</tr>
</table>