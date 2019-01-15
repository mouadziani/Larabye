<?php require_once '../app/views/partials/_header.php'; ?>

<main role="main">
	<div class="container">
		<br><br>
		<div class="card">
			<div class="card-header">Edit User</div>
			<div class="card-body">
				<form action="<?= route('user/update/' . $data['user']->id) ?>" method="post">
					<div class="form-group">
						<label for="username">UserName</label>
						<input type="text" name="username" class="form-control <?= isset($data['errors']['username']) ? 'is-invalid' : '' ?>" placeholder="UserName" value="<?= old('username', $data['user']->username) ?>">  
						<?php if (isset($data['errors']['username'])): ?>
							<small class="invalid-feedback"><?= $data['errors']['username'] ?></small>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="email">E-mail Adress</label>
						<input type="email" name="email" class="form-control <?= isset($data['errors']['email']) ? 'is-invalid' : '' ?>" placeholder="E-mail" value="<?= old('email', $data['user']->email) ?>">
					</div>
					<?php if (isset($data['errors']['email'])): ?>
						<small class="invalid-feedback"><?= $data['errors']['email'] ?></small>
					<?php endif ?>
					<div class="form-group <?= $data['errors']['password'] ? 'has-error' : '' ?>">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control <?= isset($data['errors']['password']) ? 'is-invalid' : '' ?>" placeholder="password" value="<?= old('password', $data['user']->password) ?>">
						<?php if (isset($data['errors']['password'])): ?>
							<small class="invalid-feedback"><?= $data['errors']['password'] ?></small>
						<?php endif ?>
					</div>
					<div class="form-group <?= $data['errors']['confirm_password'] ? 'has-error' : '' ?>">
						<label for="confirm_password">Password</label>
						<input type="password" name="confirm_password" class="form-control <?= isset($data['errors']['confirm_password']) ? 'is-invalid' : '' ?>" placeholder="confirm_password" value="<?= old('confirm_password', $data['user']->password) ?>">
						<?php if (isset($data['errors']['confirm_password'])): ?>
							<small class="invalid-feedback"><?= $data['errors']['confirm_password'] ?></small>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="username">Created At</label>
						<input type="date" name="createdAt" class="form-control <?= isset($data['errors']['createdAt']) ? 'is-invalid' : '' ?>" placeholder="Created At" value="<?= old('createdAt', $data['user']->createdAt) ?>">
						<?php if (isset($data['errors']['createdAt'])): ?>
							<small class="invalid-feedback"><?= $data['errors']['createdAt'] ?></small>
						<?php endif ?>
					</div>

					<button class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</main>

<?php require_once '../app/views/partials/_footer.php'; ?>
