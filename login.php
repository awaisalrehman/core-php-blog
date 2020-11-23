<?php  include('config.php');
if(isset($_SESSION['user']) && in_array($_SESSION['user']['role'], ["Admin", "Author"]))
{ header('Location: /admin/dashboard.php'); }
elseif(isset($_SESSION['user'])) { header('location: /'); }

include('includes/registration_login.php');
include('includes/head_section.php');
?>
	<title>Core PHP Blog | Sign in </title>
</head>
<body>
    <!--=====================NAVBAR======================-->
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="post" action="/login.php" >
			<fieldset>
				<h2>Please Sign In</h2>
				<?php include(ROOT_PATH . '/includes/errors.php') ?>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" value="<?php echo $username; ?>" placeholder="Username">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input name="login_btn" type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="/register.php" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->
