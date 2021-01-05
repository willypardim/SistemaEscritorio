<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->   
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url ('assets/colorlib/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/colorlib/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url({{url('assets/lawyer/canva/adv.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url ('assets/images/img-01.png')}}" alt="IMG">
                </div>
                
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

					<span class="login100-form-title">
						Create your Account
                    </span>
                                

					<div class="wrap-input100 validate-input">
                        <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Adress">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>


                    <div class="wrap-input100 validate-input">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    

					<div class="wrap-input100 validate-input">
						<input id="password-confirm" type="password" name="password_confirmation" class="input100" name="password" placeholder="Confirm Password" required autocomplete="new-password">
                            
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    

                  


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn bg-secondary">
                            {{ __('Register') }}
						</button>
                    </div>
                    


                                

					
					<div class="text-center p-t-136">
                        @if (Route::has('register'))
                            <a class="txt2" href="{{ route('login') }}">
                                {{ __('Back to login') }}
                            </a>
                        @endif
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ url('assets/colorlib/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets/colorlib/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('assets/colorlib/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets/colorlib/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets/colorlib/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ url('assets/colorlib/js/main.js')}}"></script>

</body>
</html>