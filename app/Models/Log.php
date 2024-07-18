<?php

declare(strict_types = 1);

namespace App\Models;

use App\Enums\LevelEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Log extends Model
{
    use HasFactory,
        SoftDeletes;

    const UPDATED_AT = null;

    protected $fillable = [
        'user_id',
        'client',
        'level',
        'message'
    ];

    /**
     * @return Attribute
     */
    public function level(): Attribute
    {
        return new Attribute(
            get: fn($value) => LevelEnum::from($value)->toString(),
            set: fn($value) => LevelEnum::toInt($value)
        );
    }

    /**
     * @return Attribute
     */
    public function createdAt(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->format('Y-m-d H:i:s')
        );
    }
}
