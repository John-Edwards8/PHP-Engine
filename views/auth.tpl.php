<form method='POST'>
	<input type="text" name="login" placeholder="Login"><br/><br/>
	<input type="password" name="pass" placeholder="Password"><br/><br/>
	<label>
		<input type="checkbox" name="rem"> Remember me
	</label>
	<br/><br/>
	<button type="submit">Send</button>
</form>
<?php if (!empty($mess)) { ?>
	<div class="mess">
		<?= $mess; ?>
	</div>
<?php } ?>