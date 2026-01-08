<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\HasApiTokens;

class UserRole extends Model
{
    use HasUuids;

    protected $table = 'user_roles';
    protected $fillable = [
        'user_id',
        'role_id',
    ];

    protected function casts(): array
    {
        return [
          'user_id' => 'string',
          'role_id' => 'string',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
