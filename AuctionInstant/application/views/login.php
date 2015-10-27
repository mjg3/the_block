<?php ?>

<html>
<head>
	<?php $this->load->view('/partials/meta'); ?>

	<style type="text/css">
	.container {
		border: 1px solid black;
		display: inline-block;
		margin: 10px;
	}
	</style>

</head>

<body>
	<div class="container">
		<div class="row">
			<form class="col s6">
				<div class="row">
					<div class="input-field col s3">
						<input placeholder="Placeholder" id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s3">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="input-field col s6">
				<input id="email" type="email" class="validate">
				<label for="email">Email</label>
			</div>
		</div>
	</div>

</body>
