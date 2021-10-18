<?php

namespace domain\Services\Users;

use App\Models\Users\TempUser;
use Illuminate\Database\Eloquent\Collection;

/****************************************************************
 *
 * Temp User Service
 *
 * php version 8
 *
 * Okto Zone
 * Bs Project Project
 * SE: Janith Sandaruwan [janith@oktozone.com]
 * Okto Dev
 ****************************************************************/

class TempUserService
{
    protected $tempUser;

    public function __construct()
    {
        $this->tempUser = new TempUser();
    }

    /**
     * Get tempUser using ID
     *
     * @param  int $id
     * @return TempUser
     */
    public function get(int $id): ?TempUser
    {
        return $this->tempUser->find($id);
    }
    /**
     * Get tempUsers  using md5 ID
     *
     * @param  string $id
     * @return Collection
     */
    public function getByMd5Id(string $id): ?TempUser
    {
        return  $this->tempUser->getByMd5Id($id);
    }

    /**
     * Get all tempUsers
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        //Get all tempUser
        return $this->tempUser->all();
    }

    /**
     * Create tempUser
     *
     * @param  array $tempUser
     * @return TempUser
     */
    public function create(array $tempUser): TempUser
    {
        return $this->tempUser->create($tempUser);
    }

    /**
     * Update tempUser
     *
     * @param  TempUser $tempUser
     * @param  array    $data
     * @return void
     */
    public function update(TempUser $tempUser, array $data): void
    {
        //Update Theme object with given data
        $tempUser->update($this->edit($tempUser, $data));
    }

    /**
     * Edit tempUser
     *
     * @param  TempUser $tempUser
     * @param  array    $data
     * @return array
     */
    protected function edit(TempUser $tempUser, array $data): array
    {
        return array_merge($tempUser->toArray(), $data);
    }

    /**
     * Delete tempUser
     *
     * @param  TempUser $tempUser
     * @return void
     */
    public function delete(TempUser $tempUser): void
    {
        $tempUser->delete();
    }
    /**
     * Check email validity auth
     *
     * @param  string $email
     *
     * @return int
     */
    public function checkEmailValidityByAuth(string $email): int
    {
        return $this->tempUser->checkEmailValidityByAuth($email);
    }
    /**
     * Check email validity auth
     *
     * @param  string $email
     *
     * @return int
     */
    public function checkUserNameValidityByAuth(string $email): int
    {
        return $this->tempUser->checkUserNameValidityByAuth($email);
    }
}
