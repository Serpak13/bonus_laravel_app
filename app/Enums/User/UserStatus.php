<?php

namespace App\Enums\User;

enum UserStatus: int
{
    case ACTIVE = 0;
    case BLOCKED = 1;

    public function getUserStatus(int $value): string
    {
        return match ($value) {
            self::ACTIVE->value => 'Активный',
            self::BLOCKED->value => 'Заблокированный',
            default => 'Неизвестно'
        };
    }

}
