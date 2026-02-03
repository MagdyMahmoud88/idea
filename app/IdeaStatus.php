<?php

namespace App;

enum IdeaStatus: string
{
    case Pending = 'pending';
    case In_Progress = 'in_progress';

    case Completed = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'pending',
            self::In_Progress => 'in_progress',
            self::Completed => 'completed',
        };
    }
}
