<?php

declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function route_path(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $normalized = '/' . trim((string) $path, '/');
    return $normalized === '/' ? '/' : rtrim($normalized, '/');
}

function is_active_path(string $href, string $current): bool
{
    if ($href === '/') {
        return $current === '/';
    }
    return $current === $href || str_starts_with($current, $href . '/');
}

function icon(string $name, int $size = 20): string
{
    $paths = [
        'home' => '<path d="M3 11.5 12 4l9 7.5"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/>',
        'brand' => '<circle cx="12" cy="12" r="8"/><path d="m8 12 2.4 2.4L16 9"/>',
        'palette' => '<circle cx="13.5" cy="6.5" r="1"/><circle cx="17.5" cy="10.5" r="1"/><circle cx="8.5" cy="7.5" r="1"/><circle cx="6.5" cy="12.5" r="1"/><path d="M12 3a9 9 0 1 0 0 18h1.5a2 2 0 0 0 0-4H12a2 2 0 0 1 0-4h3a6 6 0 0 0 0-12h-3Z"/>',
        'type' => '<path d="M4 6V4h16v2"/><path d="M9 20h6"/><path d="M12 4v16"/>',
        'grid' => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>',
        'components' => '<rect x="3" y="3" width="18" height="6" rx="2"/><rect x="3" y="13" width="8" height="8" rx="2"/><rect x="15" y="13" width="6" height="8" rx="2"/>',
        'layout' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 3v18M8 9h13"/>',
        'template' => '<path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z"/><path d="M3 9h18M9 21V9"/>',
        'lab' => '<path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 1.7 3h10.6a2 2 0 0 0 1.7-3l-5-9V3"/><path d="M7.5 15h9"/>',
        'download' => '<path d="M12 3v12m0 0 5-5m-5 5-5-5"/><path d="M5 21h14"/>',
        'sun' => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>',
        'moon' => '<path d="M21 12.8A9 9 0 1 1 11.2 3 7 7 0 0 0 21 12.8Z"/>',
        'menu' => '<path d="M4 6h16M4 12h16M4 18h16"/>',
        'panel' => '<path d="M4 4h16v16H4zM9 4v16"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/>',
        'external' => '<path d="M15 3h6v6M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>',
        'copy' => '<rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'chevron' => '<path d="m9 18 6-6-6-6"/>',
        'close' => '<path d="M18 6 6 18M6 6l12 12"/>',
        'code' => '<path d="m8 9-4 3 4 3m8-6 4 3-4 3m-3-9-2 12"/>',
        'accessibility' => '<circle cx="12" cy="4" r="2"/><path d="M5 8h14M12 6v15m-4-9-3 8m11-8 3 8"/>',
    ];
    $body = $paths[$name] ?? $paths['components'];
    return '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $body . '</svg>';
}

function render(string $view, array $data = [], int $status = 200): never
{
    http_response_code($status);
    extract($data, EXTR_SKIP);
    ob_start();
    require config('root') . '/app/views/pages/' . $view . '.php';
    $content = (string) ob_get_clean();
    require config('root') . '/app/views/layouts/identity.php';
    exit;
}

