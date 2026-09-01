<aside class="sidebar" id="sidebar" aria-label="Navegação principal">
  <div class="sidebar-brand">
    <a href="/" aria-label="Threeebs Identity — início">
      <img class="brand-lockup brand-lockup--dark" src="/assets/image/logo/logo-lockup-white.png" alt="Threeebs">
      <img class="brand-lockup brand-lockup--light" src="/assets/image/logo/logo-lockup-black.png" alt="Threeebs">
      <img class="brand-symbol" src="/assets/image/logo/logo-symbol-brand.png" alt="">
    </a>
    <button class="icon-button sidebar-close" type="button" data-sidebar-close aria-label="Fechar menu"><?= icon('close', 20) ?></button>
  </div>

  <nav class="sidebar-nav" aria-label="Seções da identidade">
    <?php foreach ($navigation as $group): ?>
      <section class="nav-group">
        <p class="nav-label"><?= e($group['label']) ?></p>
        <?php foreach ($group['items'] as $item): ?>
          <?php $active = is_active_path($item['href'], $currentPath); ?>
          <a class="nav-item<?= $active ? ' is-active' : '' ?>" href="<?= e($item['href']) ?>"<?= $active ? ' aria-current="page"' : '' ?> data-tooltip="<?= e($item['label']) ?>">
            <?= icon($item['icon'], 19) ?>
            <span><?= e($item['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </section>
    <?php endforeach; ?>
  </nav>

  <div class="sidebar-footer">
    <div class="version-chip"><span></span><strong>v<?= e(config('version')) ?></strong><small>Estável</small></div>
    <button class="sidebar-collapse" type="button" data-sidebar-collapse aria-label="Retrair menu" aria-expanded="true">
      <?= icon('panel', 19) ?><span>Retrair menu</span>
    </button>
  </div>
</aside>

