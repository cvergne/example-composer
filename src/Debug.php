<?php
namespace ExampleComposer;

class Debug
{
    public static function inspectEnvironmentVariables():void
    {
        echo "all environment variables: ", PHP_EOL;
        foreach (getenv() as $key => $value) {
            echo "$key => $value", PHP_EOL;
        }

        echo PHP_EOL;
    }

    public static function inspectMemoryLimit():void
    {
        $memoryLimit = ini_get('memory_limit');
        echo "memory limit: ", ini_get('memory_limit'), PHP_EOL;
        echo PHP_EOL;

        if ('123M' !== $memoryLimit) {
            throw new \Exception('memory limit is not 123M');
        }
    }
}
