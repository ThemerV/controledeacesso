@extends('layouts.app')

@section('section')
<main style="min-height: calc(105.1vh - 211px - 58px);">
    <div class="limiter">
		<div class="">
			<div class="container" style="width: 500px;">
				<form class="login100-form validate-form" method="POST" action="{{ route('login.custom') }}">
					@csrf
					<span class="login100-form-title p-b-49" style="color:red; padding-top: 130px;">
						Login
					</span>
                    <div class="border" style="border-radius: 25px; padding: 30px; width: auto;">
                        <div class="" data-validate = "Username is reauired">
                            <label for="email">CPF</label>
                            <input class="input100 border" type="text" name="email" id="email" style="border-radius: 200px; padding-left: 30px; width: 400px;">
                            @if ($errors->has('email'))
                            <span class="focus-input100" data-symbol="&#xf206;">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="text-center" data-validate="Password is required">
                            <label for="password">Senha</label>
                            <input class="input100 border" type="password" name="password" id="password" style="border-radius: 200px; padding-left: 30; width: 400px;">
                            @if ($errors->has('password'))
                            <span class="focus-input100" data-symbol="&#xf190;">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        
                        <div class="text-right p-t-8 p-b-31 text-center" style="padding: auto;">
                            <a href="#">
                                Solução para problemas no acesso
                            </a>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="login100-form-btn" style="color: white; background-color: red;">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection