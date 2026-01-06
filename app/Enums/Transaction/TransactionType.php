<?php

namespace App\Enums\Transaction;

enum TransactionType: int
{
    case ACCRUAL = 0;
    case WITHDRAW = 1;

    public function getName(int $value): string
    {
        return match ($value) {
          self::ACCRUAL->value => 'Начисление',
          self::WITHDRAW->value => 'Списание',
          default => 'Неизвестно'
        };
    }
}
