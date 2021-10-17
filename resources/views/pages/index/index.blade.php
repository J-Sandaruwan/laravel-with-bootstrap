<x-app-layout>
    <x-slot name="content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <h3>Hello {{ Auth::user()->first_name}} </h3>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <img src="{{ Auth::user()->profile_photo_url }}" alt=""
                                                class="img-thumbnail rounded-circle">
                                        </div>
                                        <h4 class="f-w-600">
                                            <span class="greeting" id="greeting"></span>
                                            <span class="right-circle">
                                                <i class="fa fa-check-circle f-14 middle"></i>
                                            </span>
                                        </h4>

                                    </div>

                                    <div class="col-sm-8">
                                        <div class="pt-4">
                                            <div class="mt-4">
                                                <a href="{{ route('profile.show') }}" class="btn btn-primary waves-effect waves-light btn-sm">View
                                                    Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>

        @push('scripts')
        <script>
            var thehours = new Date().getHours();
            var themessage;
            var morning = ('Good Morning');
            var afternoon = ('Good Afternoon');
            var evening = ('Good Evening');

            if (thehours >= 0 && thehours < 12) {
                themessage = morning;

            } else if (thehours >= 12 && thehours < 17) {
                themessage = afternoon;

            } else if (thehours >= 17 && thehours < 24) {
                themessage = evening;
            }

            $('.greeting').append(themessage);

        </script>

        @endpush
    </x-slot>


</x-app-layout>
