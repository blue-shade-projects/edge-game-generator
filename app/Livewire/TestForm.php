<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class TestForm extends Component
{

    public int $count;
    public string $notes;

    public function render(): View
    {
        return view('livewire.test-form');
    }

    public function submit(): void
    {
//        Entry::create([
//            'count' => $this->count,
//            'notes' => $this->notes
//        ]);

        // Clear everything
        // $this->reset();
    }
}
