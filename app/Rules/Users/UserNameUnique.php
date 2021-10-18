<?php

namespace App\Rules\Users;

use domain\Facades\Users\LeadFacade;
use domain\Facades\Users\TempUserFacade;
use Illuminate\Contracts\Validation\Rule;

class UserNameUnique implements Rule
{
    public  $userName;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($userName = null)
    {
        $this->userName = $userName;
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value == $this->userName) {
            return true;
        } else {
            $count = TempUserFacade::checkUserNameValidityByAuth($value);
            return $count === 0;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This user name is already existing.';
    }
}
