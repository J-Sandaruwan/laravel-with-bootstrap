<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TempUser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'password',
        'user_id'
    ];
    /**
     * Get Temp User Records by MD5 Id
     * @param  string $id
     *
     * @return TempUser
     */
    public function getByMd5Id(string $id): ?TempUser
    {
        return $this->whereRaw('md5(id) = "' . $id . '"')->first();
    }
    /**
     * Check email validity auth
     *
     * @param  string $email
     * @return int
     */
    public function checkEmailValidityByAuth(string $email): int
    {
        return $this->where('email', $email)
            ->where('user_id', Auth::id())
            ->get()->count();
    }
    /**
     * Check email validity auth
     *
     * @param  string $email
     * @return int
     */
    public function checkUserNameValidityByAuth(string $email): int
    {
        return $this->where('user_name', $email)
            ->where('user_id', Auth::id())
            ->get()->count();
    }
}
