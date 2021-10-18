<x-app-layout>
    <x-slot name="content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row  py-4">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="col-lg-6 col-7">
                                <h2 class="h2 text-dark d-inline-block mb-0">User Management <small>[create]</small>
                                </h2>
                                <nav aria-label="breadcrumb" class="d-none d-md-block mt-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}"><i
                                                    class="bx bx-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('users.index') }}">User Management</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">
                                <div class="table-responsive  p-3">
                                    <livewire:pages.users.create-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
    </x-slot>
</x-app-layout>
