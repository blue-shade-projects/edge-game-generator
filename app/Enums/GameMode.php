<?php

declare(strict_types=1);

namespace App\Enums;

enum GameMode: int
{
    case COUNT = 1;

    case TIME = 2;

    public function text(): string
    {
        return match ($this) {
            GameMode::COUNT => 'Edges',
            GameMode::TIME => 'Timer',
        };
    }
}
