<div class="row">
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="inp_password" class="form-label">Password :
                        <small> <a href="javascript:void(0)" id="passGen">&nbsp;Generate</a></small>
                    </label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                        id="inp_password" placeholder="Enter Password" wire:model="password">
                    @error('password')
                    <div class="invalid-feedback"> {{ ($message )}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="inp_confirm_password" class="form-label" wire:ignore>Confirm Password :
                        <i id="eye" onclick="showPassword()" class='fa fa-eye'></i></label>
                    </label>
                    <input type="password" class="form-control   @error('confirmPassword') is-invalid @enderror"
                        id="inp_confirm_password" placeholder="Enter Confirm Password" wire:model="confirmPassword">
                    @error('confirmPassword')
                    <div class="invalid-feedback"> {{ ($message )}}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="box-footer text-end">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                <i class="bx bx-save"></i> Update
            </button>
        </div>
    </form>
</div>

@push('scripts')
@include('pages.users.libraries.scripts.create')
@endpush
