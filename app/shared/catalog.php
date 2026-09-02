<?php

declare(strict_types=1);

function navigation(): array
{
    return [
        ['label' => 'Visão geral', 'items' => [
            ['href' => '/', 'label' => 'Introdução', 'icon' => 'home'],
            ['href' => '/identidade/logos', 'label' => 'Identidade', 'icon' => 'brand'],
        ]],
        ['label' => 'Fundamentos', 'items' => [
            ['href' => '/fundamentos/cores', 'label' => 'Cores e temas', 'icon' => 'palette'],
            ['href' => '/fundamentos/tipografia', 'label' => 'Tipografia', 'icon' => 'type'],
            ['href' => '/fundamentos/estrutura', 'label' => 'Espaço e estrutura', 'icon' => 'grid'],
            ['href' => '/fundamentos/movimento', 'label' => 'Movimento', 'icon' => 'lab'],
            ['href' => '/fundamentos/acessibilidade', 'label' => 'Acessibilidade', 'icon' => 'accessibility'],
        ]],
        ['label' => 'Biblioteca', 'items' => [
            ['href' => '/componentes', 'label' => 'Componentes', 'icon' => 'components'],
            ['href' => '/layouts', 'label' => 'Layouts', 'icon' => 'layout'],
            ['href' => '/templates', 'label' => 'Templates', 'icon' => 'template'],
        ]],
        ['label' => 'Experiências', 'items' => [
            ['href' => '/experiencias/login', 'label' => 'Login', 'icon' => 'login'],
            ['href' => '/experiencias/registro', 'label' => 'Registro', 'icon' => 'user-plus'],
            ['href' => '/experiencias/interesse', 'label' => 'Interesse', 'icon' => 'mail'],
            ['href' => '/experiencias/cookies', 'label' => 'Avisos e cookies', 'icon' => 'shield'],
            ['href' => '/experiencias/chat', 'label' => 'Chat', 'icon' => 'chat'],
        ]],
        ['label' => 'Ferramentas', 'items' => [
            ['href' => '/laboratorio', 'label' => 'Theme Lab', 'icon' => 'lab'],
            ['href' => '/recursos', 'label' => 'Recursos', 'icon' => 'download'],
        ]],
    ];
}

function foundation_data(string $slug): ?array
{
    $items = [
        'cores' => [
            'eyebrow' => 'Fundamentos / Cor',
            'title' => 'Cores com função, não decoração.',
            'description' => 'A paleta Threeebs separa valores primitivos de decisões semânticas. Isso permite trocar tema, produto e contexto sem reescrever componentes.',
            'kind' => 'colors',
        ],
        'tipografia' => [
            'eyebrow' => 'Fundamentos / Tipografia',
            'title' => 'Uma voz clara em qualquer escala.',
            'description' => 'Inter sustenta interfaces densas; Space Grotesk dá personalidade aos títulos; JetBrains Mono identifica código e tokens.',
            'kind' => 'type',
        ],
        'estrutura' => [
            'eyebrow' => 'Fundamentos / Espaço',
            'title' => 'Ritmo para telas pequenas e ultrawide.',
            'description' => 'Escalas previsíveis de espaço, raio, borda e grid dão consistência sem limitar composições específicas de cada produto.',
            'kind' => 'structure',
        ],
        'movimento' => [
            'eyebrow' => 'Fundamentos / Movimento',
            'title' => 'Movimento explica o que mudou.',
            'description' => 'Transições rápidas reforçam hierarquia e continuidade. Toda animação possui alternativa reduzida.',
            'kind' => 'motion',
        ],
        'acessibilidade' => [
            'eyebrow' => 'Fundamentos / Acessibilidade',
            'title' => 'Acessível é o estado padrão.',
            'description' => 'Contraste, foco, teclado, semântica e movimento reduzido fazem parte do contrato dos componentes.',
            'kind' => 'accessibility',
        ],
    ];
    return $items[$slug] ?? null;
}

function component_groups(): array
{
    return [
        'Ações' => ['Botões', 'Links', 'Menu de ações', 'Paginação'],
        'Formulários' => ['Campo de texto', 'Select', 'Checkbox', 'Radio', 'Switch', 'Upload'],
        'Feedback' => ['Alerta', 'Toast', 'Progresso', 'Skeleton', 'Estado vazio'],
        'Dados' => ['Badge', 'Avatar', 'Card', 'Tabela', 'Métrica'],
        'Navegação' => ['Tabs', 'Breadcrumb', 'Sidebar', 'Topbar'],
        'Overlays' => ['Modal', 'Dropdown', 'Tooltip', 'Drawer'],
    ];
}

function template_data(string $slug): ?array
{
    $templates = [
        'admin' => ['title' => 'Admin', 'description' => 'Operação interna com métricas, filtros, tabelas e ações contextuais.', 'product' => 'admin'],
        'portal' => ['title' => 'Portal', 'description' => 'Área autenticada orientada a progresso, projetos e próximos passos.', 'product' => 'portal'],
        'docs' => ['title' => 'Documentação', 'description' => 'Leitura técnica com navegação profunda, sumário e blocos de código.', 'product' => 'docs'],
        'community' => ['title' => 'Comunidade', 'description' => 'Discussões, perfis, tópicos e sinais de atividade do ecossistema.', 'product' => 'community'],
        'auth' => ['title' => 'Autenticação', 'description' => 'Login, cadastro, recuperação e verificação em duas etapas.', 'product' => 'auth'],
    ];
    return $templates[$slug] ?? null;
}
