<h1>Auth page</h1>
<p>
<form action="" method="post">
<table class="login">
	<tr>
		<th colspan="2">Auth</th>
	</tr>
	<tr>
		<td>Login</td>
		<td><input type="text" name="login"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<th colspan="2" style="text-align: right">
	<input type="submit" value="LogIn" name="btn"
	style="width: 150px; height: 30px;"></th>
</table>
</form>
</p>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Auth successed</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Auth failed</p>
<?php } ?>
