<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Welcome extends Component
{
    public int $count = 3;

    public int $number;

    public function render(): View
    {
        return view('livewire.welcome');
    }

    public function changeCount(int $increment): void
    {
        $this->count = $this->count + $increment;
    }
}
