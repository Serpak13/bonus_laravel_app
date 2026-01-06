<?php

namespace App\Observers;

use App\Models\User;
class UserObserver
{
    /**
     * @param User $user
     * @return void
     */
    public function updating(User $user): void
    {
        if ($user->getOriginal('email')  !== $user->getAttribute('email')) {
            $user->email_verified_at = null;
        }
    }

}
