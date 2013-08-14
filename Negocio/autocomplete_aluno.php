<?php
	@$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','','repositoriotrabalhosacademicos_db') or die("Database Error");
	$sql="SELECT nome FROM autor WHERE nome LIKE '%$my_data%' ORDER BY nome";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['nome']."\n";
		}
	}
?>