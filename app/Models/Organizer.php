<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\Organizers\Status;
use App\Enums\Organizers\Type;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Organizer extends Model
{
    use HasApiTokens, HasUuids;
    protected $table = 'organizers';
    protected $fillable = [
        'name',
        'status',
        'type',
        'inn',
        'kpp',
        'ogrn',
        'ogrn_date',
        'address',
        'manager_position',
        'manager_last_name',
        'manager_first_name',
        'manager_patronymic',
        'city',
        'representative_last_name',
        'representative_first_name',
        'representative_patronymic',
        'representative_phone',
        'representative_email',
        'representative_position',
        'name_bank',
        'bic_bank',
        'checking_account',
        'correspondence_account',
        'domain',
        'balance'
    ];

    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'type' => Type::class
        ];
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'organizer_id');
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class, 'organizer_id');
    }
}
