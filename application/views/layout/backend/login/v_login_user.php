<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PolluxUI Admin</title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url() ?>template/vendors/typicons/typicons.css">
	<link rel="stylesheet" href="<?= base_url() ?>template/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url() ?>template/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url() ?>template/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<img src="<?= base_url() ?>template/images/logo-dark.svg" alt="logo">
							</div>
							<h4>Hello! let's get started</h4>
							<h6 class="font-weight-light">Sign in to continue.</h6>
							<form class="pt-3" action="<?= base_url('auth/user_login') ?>" method="POST">
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- base:js -->
	<script src="<?= base_url() ?>template/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>template/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>template/js/hoverable-collapse.js"></script>
	<script src="<?= base_url() ?>template/js/template.js"></script>
	<script src="<?= base_url() ?>template/js/settings.js"></script>
	<script src="<?= base_url() ?>template/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
