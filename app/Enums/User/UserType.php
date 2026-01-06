<?php

namespace App\Enums\User;

enum UserType: int
{
    case SUPERADMIN = 0;
    case ORGANIZER = 1;
    case PARTICIPANT = 2;

    public function getUserType(int $value): string
    {
        return match ($value) {
          self::SUPERADMIN->value => 'Супер Админ',
          self::ORGANIZER->value => 'Организатор',
          self::PARTICIPANT->value => 'Участник'
        };
    }
}
