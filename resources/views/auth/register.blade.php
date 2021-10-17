<x-guest-layout>
    <x-slot name="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Register !</h5>
                                    <p>Get your okto zone account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="Name">{{ __('First Name') }}</label>
                                    <input id="first_name" class="form-control" type="text" name="first_name"
                                        :value="old('first_name')" required autofocus autocomplete="first_name"
                                        placeholder="Enter first name">
                                    @if ($errors->has('first_name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="Name">{{ __('Last Name') }}</label>
                                    <input id="last_name" class="form-control" type="text" name="last_name"
                                        :value="old('last_name')" required autocomplete="last_name"
                                        placeholder="Enter last name">
                                    @if ($errors->has('last_name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="Name">{{ __('Email') }}</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required placeholder="Enter email" />
                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" placeholder="Enter password">
                                    @if ($errors->has('password'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Enter confirm password">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                        type="submit">Register</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Already have an account ? <a href="{{route('login')}}"
                                class="font-weight-medium text-primary">
                                Login</a> </p>
                        <p>
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script> Okto Zone All Rights Reserved.</p>
                    </div>
                </div>

            </div>
        </div>
    </x-slot>
</x-guest-layout>
