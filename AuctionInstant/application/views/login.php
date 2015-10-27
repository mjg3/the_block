<html>
	<head>
	<?php
		$this->load->view('/partials/meta');
	?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col m4 offset-m4">
					<?php
						$this->load->view('partials/flash_messages.php');
					?>
				</div>
			</div>
			<div class="row">
				<div class="col s12 col m4 offset-m4">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col s6 center">
									<a href="#" class="active" id="register-form-link">Register</a>
								</div>
								<div class="col s6 center">
									<a href="#" id="login-form-link">Login</a>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="register-form" action="/users/register" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="">
										</div>
										<div class="form-group">
											<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="">
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
									<form id="login-form" action="/users/login" method="post" role="form" style="display: none;">
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div> <!--End of main container-->
	</body>
</html>
