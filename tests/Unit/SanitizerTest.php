<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use POCSanitizer\Entities\Exception\TooManySameLetterException;
use POCSanitizer\Entities\Sanitizer\Sanitizer;

final class SanitizerTest extends TestCase
{
    public function testSanitizeRepetitionLetters(): void
    {
        $this->expectException(TooManySameLetterException::class);
        $data = [
            [
                'id' => 1,
                'Name' => 'AAA BBB'
            ],
        ];

        Sanitizer::sanitize($data);
    }
}
