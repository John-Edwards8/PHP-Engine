<form method='POST'>
	<input type="text" name="a">
	<select name="operation">
		<option value="1">+</option>
		<option value="2">-</option>
		<option value="3">*</option>
		<option value="4">/</option>
	</select>
	<input type="text" name="b">
	<button type="submit">=</button>
</form>
<?= ($error?$error:""); ?>
<?= (!empty($res)?$res:""); ?>