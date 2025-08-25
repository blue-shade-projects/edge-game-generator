<?php

declare(strict_types=1);

namespace App\Enums;

enum GameStatus: int
{
    case NEW = 1;

    case ON_GOING = 2;

    case PAUSED = 3;

    case FINISHED = 4;

    public function text(): string
    {
        return match ($this) {
            GameStatus::NEW => 'New',
            GameStatus::ON_GOING => 'On Going',
            GameStatus::PAUSED => 'Paused',
            GameStatus::FINISHED => 'Finished',
        };
    }
}
