<?php

namespace App\Http\Livewire\Pages\Users\Edit;

use App\Rules\Users\EmailUnique;
use App\Rules\Users\UserNameUnique;
use domain\Facades\Users\TempUserFacade;
use Livewire\Component;

class PersonalForm extends Component
{
    public $tempUser, $email, $userName;
    public function render()
    {
        return  view('pages.users.edit.personal-form');
    }
    public function mount()
    {
        $this->email = $this->tempUser->email;
        $this->userName = $this->tempUser->user_name;
    }
    protected function rules()
    {

        return [
            'tempUser.first_name' => 'required',
            'tempUser.last_name' => 'required',
            'tempUser.email' => ['required', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', new EmailUnique($this->email)],
            'tempUser.user_name' => ['required', new UserNameUnique($this->userName)],
        ];
    }
    protected $messages = [

        'tempUser.first_name.required' => 'Please enter first name',
        'tempUser.last_name.required' => 'Please enter last name',
        'tempUser.user_name.required' => 'Please enter user name',

        'tempUser.email.required' => 'Please enter email',

        'tempUser.email.regex' => 'Please enter valid email',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        TempUserFacade::update($this->tempUser, $this->tempUser->toArray());

        $this->dispatchBrowserEvent('live-alert', [
            "type" => "success",
            "msg" => 'User updated successfully !'
        ]);
    }
}
