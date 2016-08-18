<?php

class YumpuFactory
{
    /**
     * @param string $apiToken
     */
    public static function create($apiToken)
    {
        require(__DIR__ . '/config.php');

        $config = $config;
        $config['token'] = $apiToken;

        return new Yumpu($config);
    }
}
