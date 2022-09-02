<?php

declare(strict_types=1);

namespace POCSanitizer\Entities\Exception;

class TooManySameLetterException extends \DomainException
{
    public const MESSAGE= 'Too many letters repetition.';
}
