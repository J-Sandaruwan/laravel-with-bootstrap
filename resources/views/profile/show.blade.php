<x-app-layout>
    <x-slot name="content">
        <section class="page-content">

            <div class="container-fluid">
                

            <div class="row mt-5">
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
        </section>
    </x-slot>
</x-app-layout>
