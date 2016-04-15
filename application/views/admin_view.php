<h1>Admin Panel</h1>
<p>
<a href="/admin/logout">Logout</a>
<table>
Blog
<tr><td>id</td><td>title</td><td>description</td></td><td>Options</td></tr>
<?php
	
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['description'].'</td>
		<td>
		<form action="/admin/delete" method="post">
		<input type="hidden" name="id" value="' .$row['id']. '">
		<input type="submit" value="Delete">
		</form>
		<form action="/admin/update" method="post">
		<input type="hidden" name="id" value="' .$row['id']. '">
		<input type="submit" value="Update">
		</form>
		</td>
		</tr>';
	}
	
?>
</table>
</p>
