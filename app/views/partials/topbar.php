<header class="topbar">
  <div class="topbar-start">
    <button class="icon-button mobile-menu" type="button" data-sidebar-open aria-label="Abrir menu" aria-controls="sidebar" aria-expanded="false"><?= icon('menu', 21) ?></button>
    <div class="breadcrumb" aria-label="Localização atual">
      <a href="/">Identity</a><span>/</span><strong><?= e($title ?? 'Visão geral') ?></strong>
    </div>
  </div>
  <div class="topbar-actions">
    <button class="search-trigger" type="button" data-command-open>
      <?= icon('search', 18) ?><span>Buscar</span><kbd>Ctrl K</kbd>
    </button>
    <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Ativar tema claro">
      <span class="theme-icon theme-icon--sun"><?= icon('sun', 19) ?></span>
      <span class="theme-icon theme-icon--moon"><?= icon('moon', 19) ?></span>
    </button>
    <a class="icon-button" href="https://github.com/Tiao-gpt" target="_blank" rel="noreferrer" aria-label="Abrir GitHub"><?= icon('external', 19) ?></a>
  </div>
</header>

