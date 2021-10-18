<?php

namespace App\Http\Livewire\Pages\Users\Edit;

use domain\Facades\Users\TempUserFacade;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PasswordForm extends Component
{
    public $tempUser, $password, $confirmPassword;
    public function render()
    {
        return  view('pages.users.edit.password-form');
    }

    protected function rules()
    {
        return [
            'password' => ['required', 'min:8', 'same:confirmPassword'],
            'confirmPassword' => ['required'],
        ];
    }
    protected $messages = [
        'password.required' => 'Please enter password',

        'confirmPassword.required' => 'Please enter confirm password',
    ];
    public function updated($propertyName)
    {
        $this->emit('checkPassword');
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->emit('checkPassword');
        $this->validate();
        $this->tempUser->password = Hash::make($this->password);
        TempUserFacade::update($this->tempUser, $this->tempUser->toArray());

        $this->dispatchBrowserEvent('live-alert', [
            "type" => "success",
            "msg" => 'User password updated successfully !'
        ]);
        $this->password = null;
        $this->confirmPassword = null;
    }
}
