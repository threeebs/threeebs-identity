<?php

declare(strict_types=1);

function env_value(string $key, string $default = ''): string
{
    $value = getenv($key);
    return $value === false || $value === '' ? $default : $value;
}

function config(?string $key = null): mixed
{
    static $config;

    if ($config === null) {
        $root = dirname(__DIR__, 2);
        $config = [
            'root' => $root,
            'env' => env_value('APP_ENV', 'local'),
            'debug' => filter_var(env_value('APP_DEBUG', 'false'), FILTER_VALIDATE_BOOL),
            'name' => 'Threeebs Identity',
            'url' => rtrim(env_value('APP_URL', 'http://localhost:6020'), '/'),
            'domain' => env_value('APP_DOMAIN', 'identidade.3eb.site'),
            'version' => '1.0.0',
        ];
    }

    return $key === null ? $config : ($config[$key] ?? null);
}
