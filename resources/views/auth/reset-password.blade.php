<x-guest-layout>
    <x-slot name="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary"> Reset Password</h5>
                                    <p>Reset Password with Ndeals.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">

                        <div class="p-2">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control" placeholder="Enter email" type="email"
                                        name="email" value="{{old('email', $request->email)}}" required autofocus />
                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password">Password</label>
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
                                    <input id="password_confirmation" class="form-control" class="block mt-1 w-full"
                                        placeholder="Enter confirm password" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                        type="submit">{{ __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
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
