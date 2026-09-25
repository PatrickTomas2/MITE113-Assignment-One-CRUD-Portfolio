<?php

namespace App\Policies;

use App\Models\Skills;
use App\Models\User;

class SkillsPolicy
{
    public function update(User $user, Skills $skills): bool
    {
        return $user->id === $skills->user_id;
    }

    public function delete(User $user, Skills $skills): bool
    {
        return $user->id === $skills->user_id;
    }
}
