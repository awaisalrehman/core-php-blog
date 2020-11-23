<?php
include('../config.php');
if(!isset($_SESSION['user']) || !in_array($_SESSION['user']['role'], ["Admin", "Author"]))
{ header('Location: /'); }
include(ROOT_PATH . '/admin/includes/admin_functions.php');
include(ROOT_PATH . '/admin/includes/head_section.php'); 
?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container dashboard">
		<!-- Display notification message -->
		<?php include(ROOT_PATH . '/includes/messages.php') ?>
		<h1>Welcome</h1>
		<div class="stats">
		<?php if($_SESSION['user']['role'] == "Admin"): ?> 
			<a href="/admin/users/" class="first">
				<span>43</span> <br>
				<span>Newly registered users</span>
			</a>
		<?php endif ?>
			<a href="/admin/posts/">
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Published comments</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
		<?php if($_SESSION['user']['role'] == "Admin"): ?> 
			<a href="/admin/users/">Add Users</a>
		<?php endif ?>
			<a href="/admin/posts/">Add Posts</a>
		</div>
	</div>
</body>
</html>
