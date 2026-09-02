<?php
$pageTitle = ($title ?? config('name')) . ' · Threeebs Identity';
$description = $description ?? 'Design system, componentes, templates e recursos oficiais da identidade Threeebs.';
$navigation = $navigation ?? navigation();
$currentPath = $currentPath ?? route_path();
?>
<!doctype html>
<html lang="pt-BR" data-theme="dark" data-product="identity">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#07100f">
  <meta name="description" content="<?= e($description) ?>">
  <meta property="og:title" content="<?= e($pageTitle) ?>">
  <meta property="og:description" content="<?= e($description) ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?= e(config('url')) ?>/assets/image/og.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($pageTitle) ?>">
  <meta name="twitter:description" content="<?= e($description) ?>">
  <meta name="twitter:image" content="<?= e(config('url')) ?>/assets/image/og.png">
  <title><?= e($pageTitle) ?></title>
  <script>
    (() => {
      const saved = localStorage.getItem('threeebs-theme');
      document.documentElement.dataset.theme = saved === 'light' ? 'light' : 'dark';
      document.documentElement.classList.add('js');
    })();
  </script>
  <link rel="icon" href="/assets/image/logo/logo-symbol-brand.png">
  <link rel="stylesheet" href="/design-system/src/main.css">
  <link rel="stylesheet" href="/assets/css/identity.css">
</head>
<body>
  <a class="skip-link" href="#main-content">Pular para o conteúdo</a>
  <?php require config('root') . '/app/views/partials/loading.php'; ?>
  <div class="app-shell" id="app-shell">
    <?php require config('root') . '/app/views/partials/sidebar.php'; ?>
    <div class="app-main">
      <?php require config('root') . '/app/views/partials/topbar.php'; ?>
      <main class="page-content" id="main-content" tabindex="-1">
        <?= $content ?>
      </main>
      <?php require config('root') . '/app/views/partials/footer.php'; ?>
    </div>
  </div>
  <div class="sidebar-scrim" data-sidebar-close hidden></div>
  <div class="toast-region" aria-live="polite" aria-atomic="true"></div>
  <dialog class="command-dialog" id="command-dialog" aria-labelledby="command-title">
    <div class="command-head">
      <div><?= icon('search', 18) ?><input id="command-search" type="search" placeholder="Buscar página ou componente…" autocomplete="off" aria-label="Buscar no design system"></div>
      <button class="icon-button" type="button" data-dialog-close aria-label="Fechar busca"><?= icon('close', 18) ?></button>
    </div>
    <h2 class="sr-only" id="command-title">Busca rápida</h2>
    <div class="command-results" id="command-results"></div>
  </dialog>
  <script type="module" src="/assets/js/threeebs-identity.js"></script>
  <?php if ($currentPath === '/laboratorio'): ?>
    <script type="module" src="/assets/js/laboratory.js"></script>
  <?php endif; ?>
</body>
</html>

