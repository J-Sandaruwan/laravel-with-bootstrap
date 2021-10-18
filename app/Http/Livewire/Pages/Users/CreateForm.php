<?php

namespace App\Http\Livewire\Pages\Users;

use App\Models\Users\TempUser;
use App\Rules\Users\EmailUnique;
use App\Rules\Users\UserNameUnique;
use domain\Facades\Users\TempUserFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CreateForm extends Component
{
    public $tempUser, $password, $confirmPassword;
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        $this->tempUser = new TempUser();
    }

    public function render()
    {
        return view('pages.users.components.create-form');
    }

    protected function rules()
    {
        return [
            'tempUser.first_name' => 'required',
            'tempUser.last_name' => 'required',
            'tempUser.user_name' => ['required', new UserNameUnique],
            'tempUser.email' => ['required', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', new EmailUnique],
            'password' => ['required', 'min:8', 'same:confirmPassword'],
            'confirmPassword' => ['required'],
        ];
    }
    protected $messages = [

        'tempUser.first_name.required' => 'Please enter first name',
        'tempUser.last_name.required' => 'Please enter last name',
        'tempUser.user_name.required' => 'Please enter user name',

        'tempUser.email.required' => 'Please enter email',

        'tempUser.email.regex' => 'Please enter valid email',
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
        $this->tempUser->user_id = Auth::id();
        TempUserFacade::create($this->tempUser->toArray());
        Session::flash('alert-success', 'New user create successfully !');
        return redirect()->route('users.index');
    }
}
