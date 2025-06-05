<?php

namespace App\Enums;

enum QuizTypeEnum: string
{
    case SINGLE_CHOICE = 'single_choice';
    case MULTIPLE_CHOICE = 'multiple_choice';
    case TRUE_FALSE = 'true_false';
    case FILL_IN_THE_BLANK = 'fill_in_the_blank';

    public function label(): string
    {
        return match ($this) {
            self::SINGLE_CHOICE => 'Escolha Única',
            self::MULTIPLE_CHOICE => 'Escolha Múltipla',
            self::TRUE_FALSE => 'Verdadeiro ou Falso',
            self::FILL_IN_THE_BLANK => 'Preencha o Espaço',
        };
    }
}