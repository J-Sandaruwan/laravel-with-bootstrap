<x-jet-form-section submit="updateProfileInformation">



    <x-slot name="form">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <!-- New Profile Photo Preview -->

                <!-- Profile Photo -->
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
                    <!-- Profile Photo File Input -->
                    <input type="file" hidden wire:model="photo" x-ref="photo" x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />

                    <x-jet-label for="photo" value="{{ __('Photo') }}" />

                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle pro-image">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview">
                        <img x-bind:src="photoPreview" class="rounded-circle pro-image">
                    </div>

                    <x-jet-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </x-jet-secondary-button>

                    @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">


                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                    @endif

                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
                @endif
            </div>

            <div class="col-lg-6">
                <!-- Name -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name"
                                aria-describedby="helpId" wire:model.defer="state.first_name"
                                placeholder="First Name Here">
                            <x-jet-input-error for="first_name" class="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name"
                                aria-describedby="helpId" wire:model.defer="state.last_name"
                                placeholder="Last Name Here" autocomplete="last_name">
                            <x-jet-input-error for="last_name" class="" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                                wire:model.defer="state.email" readonly>
                            <small class="text-danger">
                                Can't Updated that email
                            </small>
                            <x-jet-input-error for="email" class="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-success" on="saved">

            Profile Updated Successfully
        </x-jet-action-message>


        <x-jet-button wire:loading.attr="disabled" wire:target="photo" class="btn btn-dark text-uppercase">
            Save
        </x-jet-button>
    </x-slot>
    @push('styles')
    <style>
        .wr-50 {
            height: 13rem;
        }

        .hr-50 {
            width: 13rem;
        }

        .pro-image {
            width: 12rem;
            height: 12rem;
        }

    </style>
    @endpush

</x-jet-form-section>
