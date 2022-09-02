<?php

declare(strict_types=1);

namespace POCSanitizer\Entities\Sanitizer;

use POCSanitizer\Entities\Exception\TooManySameLetterException;

final class Sanitizer
{
    public static function sanitize(array $data): array
    {
        $newData = [];

        foreach ($data as $value) {
            if (is_array($value)) {
                self::sanitize($value);
            }

            if (is_string($value)) {
                $strCount = array_filter(
                    count_chars($value, 1),
                    function (int $count) {
                        return $count > 2;
                    }
                );

                if (!empty($strCount)) {
                    throw new TooManySameLetterException();
                }
            }

            $newData[] = $value;
        }

        return $newData;
    }
}
