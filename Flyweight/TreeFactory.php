<?php

namespace Flyweight;

class TreeFactory {

    static array $cache = [];

    static function getTreeType(string $name, string $color, string $texture) {
        if (
            !isset(
                self::$cache[
                    md5(strtolower($name) . strtolower($color) . strtolower($texture))
                ]
            )
        ) {
            self::$cache[
                md5(strtolower($name) . strtolower($color) . strtolower($texture))
            ] = new TreeType($name, $color, $texture);
        }

        return self::$cache[
            md5(strtolower($name) . strtolower($color) . strtolower($texture))
        ];
    }    
}