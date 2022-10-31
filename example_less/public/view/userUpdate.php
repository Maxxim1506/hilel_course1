<?php 
$user = $user[0];
?>
<!DOCTYPE html>
<html>
<form action="/homework_hilel/example_less/user/update" class="p-4 shadow rounded" method="POST">
	<div class="mb-3">

		<label for="name" class="form-label fs-3">Name</label>
		<input type="text" class="form-control" id="name" name="name" value="<?= $user['name']?>">
	</div>
	<div class="mb-3">
		<label for="phone" class="form-label fs-3">Phone</label>
		<input type="number" class="form-control" id="phone" name="phone" value="<?=$user['phone']?>">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label fs-3">Email</label>
		<input type="email" class="form-control" id="email" name="email" value="<?=$user['email']?>">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label fs-3">Password</label>
		<input type="password" class="form-control" id="password" name="password" value="<?=$user['password']?>">
	</div>
	<input type="hidden" class="form-control" name="id" value="<?=$user['id']?>">
	<button type="submit" class="btn btn-primary w-100 p-2 text-uppercase fs-5">
		Update
	</button>
</form>
</html>
