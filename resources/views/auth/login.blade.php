@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
	@csrf
					<span class="login100-form-title p-b-26">
						Welcome To <br>
						BB Belt Shop
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-blogger"></i>
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
					<a class="txt2" href="{{route('password.request') }}">
							forgot Password?
						</span>

					</div>
				</form>
@endsection
