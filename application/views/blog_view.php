<h1>Портфолио</h1>
<p>
<table>
Blog
<tr><td>id</td><td>title</td><td>description</td></tr>
<?php
	
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['description'].'</td></tr>';
	}
	
?>
</table>
</p>
