<?php

namespace App\Enums\Organizers;

enum Status: int
{
    case New = 0; //-- Новый
    case UnderReview = 1; //-- На проверке
    case Confirmed = 2; //-- Подтверждён
    case Blocked = 3; //-- Заблокирован

    public function getName($value): string
    {
        return match ($value) {
            self::New->value => 'New',
            self::UnderReview->value => 'Under Review',
            self::Confirmed->value => 'Confirmed',
            self::Blocked->value => 'Blocked',
            default => 'Неизвестно'
        };
    }
}
