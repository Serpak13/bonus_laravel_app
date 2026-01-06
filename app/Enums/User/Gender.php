<?php

namespace App\Enums\User;

enum Gender: int
{
    case MALE = 0;
    case FEMALE = 1;

    public function getName(int $value): string
    {
        return match ($value) {
          self::MALE->value => 'муж',
          self::FEMALE->value => 'жен'
        };
    }
}
