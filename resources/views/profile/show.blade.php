<x-app-layout>
    <x-slot name="content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row  py-4">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="col-lg-6 col-7">
                                <h2 class="h2 text-dark d-inline-block mb-0">Profile Management </h2>
                                <nav aria-label="breadcrumb" class="d-none d-md-block mt-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}"><i
                                                    class="bx bx-home"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">Profile Management</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="nav nav-pills nav-fill" role="tablist">
                                            <li class="nav-item waves-effect waves-light  mb-2 mt-2 second-nav p-2">
                                                <a id="tabs-icons-text-1-tab" data-bs-toggle="tab" href="#tabs-icons-text-1"
                                                    role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"
                                                    class="template-nav-navblade nav-link active  border border-primary rounded">
                                                    <span class="d-block d-sm-none"><i class="fa fa-id-card"></i></span>
                                                    <span class="d-none d-sm-block">
                                                        <i class="fas fa-user"></i> Personal Information
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light ml-2  mb-2 mt-2 second-nav  p-2">
                                                <a id="tabs-icons-text-2-tab" data-bs-toggle="tab" href="#tabs-icons-text-2"
                                                    role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"
                                                    class="template-nav-navblade nav-link border border-primary rounded">
                                                    <span class="d-block d-sm-none"><i class="fa fa-map-marker"></i></span>
                                                    <span class="d-none d-sm-block">
                                                        <i class="fas fa-unlock-alt"></i> Password
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light ml-2  mb-2 mt-2 second-nav p-2">
                                                <a id="tabs-icons-text-2-tab" data-bs-toggle="tab" href="#tabs-icons-text-3"
                                                    role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"
                                                    class="template-nav-navblade nav-link border border-primary rounded">
                                                    <span class="d-block d-sm-none"><i class="fa fa-map-marker"></i></span>
                                                    <span class="d-none d-sm-block">
                                                        <i class="fas fa-key"></i> Two Factor
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light ml-2  mb-2 mt-2 second-nav p-2">
                                                <a id="tabs-icons-text-5-tab" data-bs-toggle="tab" href="#tabs-icons-text-5"
                                                    role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"
                                                    class="template-nav-navblade nav-link border border-primary rounded">
                                                    <span class="d-block d-sm-none"><i class="fa fa-map-marker"></i></span>
                                                    <span class="d-none d-sm-block">
                                                        <i class="fab fa-chrome"></i> Browser Sessions
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-xl-12 order-xl-1 ">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-12 justify-content-center">
                                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                        @livewire('profile.update-profile-information-form')
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="tabs-icons-text-2" role="tabpanel">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8 ">

                                                        @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                                        <div class="mt-10 sm:mt-0">
                                                            @livewire('profile.update-password-form')
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="tabs-icons-text-3" role="tabpanel"
                                                aria-labelledby="tabs-icons-text-3-tab">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8 ">
                                                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                                        <div class="mt-10 sm:mt-0">
                                                            @livewire('profile.two-factor-authentication-form')
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade " id="tabs-icons-text-5" role="tabpanel"
                                                aria-labelledby="tabs-icons-text-4-tab">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8 ">
                                                        <div class="mt-10 sm:mt-0">
                                                            @livewire('profile.logout-other-browser-sessions-form')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </x-slot>
</x-app-layout>
