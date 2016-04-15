<h1>Article add</h1>
<p>
<form action="" method="post">
<table class="article">
	<tr>
		<th colspan="2">Article</th>
	</tr>
	<tr>
		<td>Title</td>
		<td><input type="text" name="title" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="description" cols="50" ROWS="20" maxlength="1000"></textarea></td>
	</tr>
	<th colspan="2" style="text-align: right">
	<input type="submit" value="Save Article" name="btn"
	style="width: 150px; height: 30px;"></th>
</table>
</form>
</p>

<?php extract($data); ?>
<?php if($newdata_status=="success") { ?>
<p style="color:green">Successfully added</p>
<?php } elseif($newdata_status=="fail") { ?>
<p style="color:red">Failed to add</p>
<?php } ?>

