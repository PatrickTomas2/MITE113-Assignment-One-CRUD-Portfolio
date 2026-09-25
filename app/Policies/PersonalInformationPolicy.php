<?php

namespace App\Policies;

use App\Models\PersonalInformation;
use App\Models\User;

class PersonalInformationPolicy
{
    public function update(User $user, PersonalInformation $personalInformation): bool
    {
        return $user->id === $personalInformation->user_id;
    }

    public function delete(User $user, PersonalInformation $personalInformation): bool
    {
        return $user->id === $personalInformation->user_id;
    }
}
