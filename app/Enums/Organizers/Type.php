<?php

namespace App\Enums\Organizers;

enum  Type: int
{
    case Legal = 0;
    case Individual = 1;

    public function getName($value): string
    {
        return match ($value) {
          self::Legal->value => 'Юридическое лицо',
          self::Individual->value => 'ИП'
        };
    }
}
