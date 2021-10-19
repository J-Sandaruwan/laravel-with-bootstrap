<x-guest-layout>

    <x-slot name="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Login in to continue to Okto Zone</p>
                                </div>
                            </div>
                            <div class="col-4 align-self-end m-3">
                                <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">


                        <div class="p-2">

                            <div class="form-group">
                                @if ($errors->any() && !session('auth_failed'))
                                <span>
                                    <h6 class="help-block text-danger"> <strong>Oops!</strong>
                                        {{ implode('', $errors->all(':message')) }}</h6>
                                </span>
                                @endif

                                @if (session('auth_failed'))
                                <span>
                                    <h6 class="help-block text-danger"> <strong>Oops!</strong>
                                        {{ session('auth_failed') }}.</h6>
                                </span>
                                @endif
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}" id="login-form">
                                @csrf
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" placeholder="Enter Email" autofocus required>
                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" type="password" name="password"
                                        autocomplete="current-password" placeholder="Enter Password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline"
                                        name="remember">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"
                                        name="submit-form" id="submit-btn">
                                        Login
                                    </button>
                                </div>

                                @if (Route::has('password.request'))
                                <div class="mt-4 text-center">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i
                                            class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                </div>
                                @endif
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Don't have an account ? <a href="{{route('register')}}" class="font-weight-medium
                        text-primary">
                                Signup now </a> </p>
                        <p>
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script> Okto Zone All Rights Reserved.</p>
                    </div>
                </div>

            </div>
    </x-slot>
</x-guest-layout>
