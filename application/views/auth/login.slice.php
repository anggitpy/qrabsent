@extends('default.layouts.login')

@section('login')
<div class="login-box">

	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">

			<div class="login-logo">
				Lau Alig
			</div>

			<p class="login-box-msg">Sign in to start your session</p>

			<?php echo form_open("auth/login", 'id="formLogin"'); ?>

			<div class="input-group mb-2">
				<input type="text" name="identity" value="" id="identity" class="form-control" placeholder="Email" required="required">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-envelope"></span>
					</div>
				</div>
			</div>
			<div class="input-group mb-3">
				<input type="password" name="password" value="" id="password" class="form-control" placeholder="Password" required="required">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-8">
					<div class="icheck-primary">
						<input type="checkbox" name="remember" value="1" id="remember" />
						<label for="remember">
							Remember Me
						</label>
					</div>
				</div>

			</div>

			<button type="submit" class="btn btn-primary btn-block">Sign In</button>
			<div class="text-center text-xs mt-3">&copy; 2020 Something</div>

			<?php echo form_close() ?>


		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
@endsection