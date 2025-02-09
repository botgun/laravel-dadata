<?php

namespace BotGun\DaData\Enums;

trait Enum
{
    /**
     * @return array
     */
    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    /**
     * @return array
     */
    public static function keys(): array
    {
        return array_map(fn($case) => $case->name, self::cases());
    }

    /**
     * @param mixed $math
     *
     * @return mixed
     */
    public static function match(mixed $math): mixed
    {
        foreach (self::cases() as $case) {
            if ($math === $case->value) {
                return $case;
            }
        }

        return null;
    }
}
