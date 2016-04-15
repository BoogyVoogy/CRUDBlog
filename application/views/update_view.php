<h1>Update article</h1>
<p>
	<?php extract($data); ?>
	
<form action="/admin/save" method="post">
<table class="article">
	<tr>
		<th colspan="2">Article</th>
	</tr>
		<tr>
		<td>id</td>
		<td><input type="text" name="id" size="30" maxlength="30" readonly="readonly" value=<?php echo '"' .$id. '"'; ?>></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><input type="text" name="title" size="30" maxlength="30" value=<?php echo '"' .$title. '"'; ?>></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="description" cols="50" ROWS="20" maxlength="1000"><?php echo $description; ?></textarea></td>
	</tr>
	<th colspan="2" style="text-align: right">
	<input type="submit" value="Save Article" name="btn"
	style="width: 150px; height: 30px;"></th>
</table>
</form>
</p>



