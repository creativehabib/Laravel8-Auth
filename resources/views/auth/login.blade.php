@extends('layouts.app')

@section('content')
<section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" class="my-login-validation" novalidate="" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        

                                        @if (Route::has('password.request'))
                                    <a class="float-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                     <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class="custom-control-label"> {{ __('Remember Me') }}</label>
                                    </div>

                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="{{route('register')}}">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; <?php echo date('Y'); ?> &mdash; Habibur Rahaman  (UDA) National University, Bangladesh
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
