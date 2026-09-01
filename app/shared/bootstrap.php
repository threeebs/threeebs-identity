<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/catalog.php';

date_default_timezone_set(env_value('TZ', 'UTC'));

set_exception_handler(static function (Throwable $error): void {
    error_log($error->__toString());
    $message = config('debug') ? $error->getMessage() : 'Não foi possível carregar esta página.';
    render('error', ['title' => 'Erro interno', 'message' => $message, 'currentPath' => route_path()], 500);
});

