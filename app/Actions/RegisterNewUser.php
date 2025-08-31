<?php

namespace App\Actions;

use App\Dto\RegisterDto;
use App\Models\User;

class RegisterNewUser extends Action
{
    public function handle(RegisterDto $register_data): void
    {
        User::query()->create([
            'name' => $register_data->username,
            'email' => $register_data->email,
            'password' => bcrypt($register_data->password),
        ]);
    }
}