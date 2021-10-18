<?php

namespace App\Rules\Users;

use domain\Facades\Users\LeadFacade;
use domain\Facades\Users\TempUserFacade;
use Illuminate\Contracts\Validation\Rule;

class EmailUnique implements Rule
{
    public  $email;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($email = null)
    {
        $this->email = $email;
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
        if ($value == $this->email) {
            return true;
        } else {
            $count = TempUserFacade::checkEmailValidityByAuth($value);
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
        return 'This email is already existing.';
    }
}
