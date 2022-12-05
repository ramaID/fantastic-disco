<?php

namespace Domain\User\Models;

use Database\Factories\LoginFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<Login>
     */
    protected static function newFactory(): Factory
    {
        return LoginFactory::new();
    }
}
