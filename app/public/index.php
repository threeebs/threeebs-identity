<?php

declare(strict_types=1);

require dirname(__DIR__) . '/shared/bootstrap.php';

$path = route_path();
$common = ['currentPath' => $path, 'navigation' => navigation()];

if ($path === '/') {
    render('home', $common + ['title' => 'Design system Threeebs']);
}

if ($path === '/identidade/logos') {
    render('identity', $common + ['title' => 'Identidade visual']);
}

if (preg_match('#^/fundamentos/([a-z-]+)$#', $path, $matches)) {
    $foundation = foundation_data($matches[1]);
    if ($foundation) {
        render('foundation', $common + $foundation + ['title' => $foundation['title']]);
    }
}

if ($path === '/componentes') {
    render('components', $common + ['title' => 'Componentes', 'groups' => component_groups()]);
}

if ($path === '/layouts') {
    render('layouts', $common + ['title' => 'Layouts']);
}

if ($path === '/templates') {
    render('templates', $common + ['title' => 'Templates']);
}

if (preg_match('#^/templates/([a-z-]+)$#', $path, $matches)) {
    $template = template_data($matches[1]);
    if ($template) {
        render('template', $common + $template + ['title' => 'Template ' . $template['title']]);
    }
}

if ($path === '/laboratorio') {
    render('laboratory', $common + ['title' => 'Theme Lab']);
}

if ($path === '/recursos') {
    render('resources', $common + ['title' => 'Recursos']);
}

render('error', $common + ['title' => 'Página não encontrada', 'message' => 'A rota solicitada ainda não faz parte da biblioteca.'], 404);
