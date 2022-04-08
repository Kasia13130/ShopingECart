<?php

namespace Kasia\ShopingEcart\Database;

class DBConnect
{
    private static $config = [];

    public static function load(array $config)
    {
        // print_r($config);
        self::$config = $config;
    }

    public static function getConfig(string $configPath): mixed
    {
        $configValue = null;
        $config = self::$config;
        $path = explode('.', $configPath);

        // print_r($path);
    }

    public function loadConfig()
    {
        var_dump(include(ROOT_DIR . "config/config.php"));
        var_dump($_ENV['DB_HOST']);
        // DBConnect::load(include(ROOT_DIR . "config/config.php"));
    }
}