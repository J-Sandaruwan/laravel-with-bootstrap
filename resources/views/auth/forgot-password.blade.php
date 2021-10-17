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
                                    <p>Re-Password with Ndeals.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">

                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" placeholder="Enter email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Remember It ? <a href="{{route('login')}}" class="font-weight-medium text-primary"> Login
                                here</a>
                        </p>
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
