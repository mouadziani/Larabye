<?php require_once '../app/views/partials/_header.php'; ?>

<main role="main" style="margin-top: 30px">
	<div class="container">

		<?= flash()->display(); ?>

		<h1>List of users</h1><hr>
		
		<form action="<?= route('user/searche') ?>" class="mb-2" method="post">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control" placeholder="Searche by username or email ..." value="<?= old('keyword') ?>" autofocus="on">
				<div class="input-group-append">
					<button class="btn btn-warning" type="submit">Searche</button>
				</div>
			</div>
		</form>

		<table class="table table-striped table-bordered">
			<tr>
				<th>#</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Password</th>
				<th>Created at</th>
				<th>Actions</th>
			</tr>
			<?php foreach ($data['users'] as $user): ?>
				<tr>
					<td><?= $user->id ?></td>
					<td><?= $user->username ?></td>
					<td><?= $user->email ?></td>
					<td><?= $user->password ?></td>
					<td><?= $user->created_at ?></td>
					<td>
						<a href="<?= route('user/edit/' . $user->id) ?>" class="btn btn-sm btn-success">Edit</a>
						<form class="form-action"action="<?= route('user/delete/' . $user->id) ?>">
							<button type="button" class="btn btn-sm btn-danger delete-user">Delete</button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</table>	
	</div>
</main>

<?php require_once '../app/views/partials/_footer.php'; ?>
<script src="<?= asset('js/application/users/index.js') ?>"></script>
<?php require_once '../app/views/partials/_sub_footer.php'; ?>




