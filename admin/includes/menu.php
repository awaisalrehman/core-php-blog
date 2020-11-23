<div class="menu">
	<div class="card">
		<div class="card-header">
			<h2>Actions</h2>
		</div>
		<div class="card-content">
			<a href="<?php echo BASE_URL . 'admin/posts/create.php' ?>">Create Posts</a>
			<a href="<?php echo BASE_URL . 'admin/posts/' ?>">Manage Posts</a>
		<?php if($_SESSION['user']['role'] == "Admin"): ?> 
			<a href="<?php echo BASE_URL . 'admin/users/' ?>">Manage Users</a>
			<a href="<?php echo BASE_URL . 'admin/topics/' ?>">Manage Topics</a>
		<?php endif ?>
		</div>
	</div>
</div>