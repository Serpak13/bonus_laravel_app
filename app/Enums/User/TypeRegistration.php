<?php

namespace App\Enums\User;

enum TypeRegistration: int
{
    case Open = 0;
    case Closed = 1;

    public function getName($value): string
    {
        return match ($value) {
            self::Open->value => 'Открытая регигстрация',
            self::Closed->value => 'Закрытая регистрация'
        };
    }
}
