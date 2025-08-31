<?php

namespace App\Livewire;

use App\Actions\RegisterNewUser;
use App\Dto\RegisterDto;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate(['required', 'string', 'max:255'])]
    public string $username;

    #[Validate(['required', 'email', 'confirmed'])]
    public string $email;

    public string $email_confirmation;

    #[Validate(['required', 'string', 'min:8', 'max:255', 'confirmed'])]
    public string $password;

    public string $password_confirmation;

    public bool $password_confirmed = true;

    public function render(): View
    {
        return view('livewire.register');
    }

    public function register(): void
    {
        $register_data = new RegisterDto($this->username, $this->email, $this->password);

        RegisterNewUser::create()->handle($register_data);

        $this->reset();
    }

    public function checkPasswordConfirm(): void
    {
        if ($this->password !== $this->password_confirmation) {
            $this->password_confirmed = false;
        } else {
            $this->password_confirmed = true;
        }
    }

    public function checkEmailConfirm(): void
    {
        // ToDo: Check email confirmation
    }

    public function checkUsername(): void
    {
        // Todo: Check if username already exists
    }

    public function checkEmail(): void
    {
        // ToDo: Check if email already exists
    }
}
