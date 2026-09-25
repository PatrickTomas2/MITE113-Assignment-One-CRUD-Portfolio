<?php

namespace App\Policies;

use App\Models\Projects;
use App\Models\User;

class ProjectsPolicy
{
    public function update(User $user, Projects $projects): bool
    {
        return $user->id === $projects->user_id;
    }

    public function delete(User $user, Projects $projects): bool
    {
        return $user->id === $projects->user_id;
    }
}
