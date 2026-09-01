<section class="hero reveal">
  <div class="hero-copy">
    <p class="eyebrow"><span></span> Sistema visual oficial</p>
    <h1>Uma identidade.<br><em>Todo o ecossistema.</em></h1>
    <p class="hero-lead">Tokens, componentes e padrões que mantêm cada experiência Threeebs consistente — do primeiro login ao painel mais complexo.</p>
    <div class="hero-actions">
      <a class="button button--primary" href="/fundamentos/cores">Explorar fundamentos <?= icon('chevron', 17) ?></a>
      <a class="button button--secondary" href="/laboratorio">Abrir Theme Lab</a>
    </div>
    <dl class="hero-stats">
      <div><dt>3</dt><dd>camadas de tokens</dd></div>
      <div><dt>6</dt><dd>contextos de produto</dd></div>
      <div><dt>AA</dt><dd>contraste mínimo</dd></div>
    </dl>
  </div>
  <div class="hero-visual" aria-label="Demonstração de superfícies Threeebs">
    <div class="orb"></div>
    <article class="visual-card visual-card--main">
      <div class="mini-top"><span class="mini-logo"><img src="/assets/image/logo/logo-symbol-brand.png" alt=""></span><span></span><span></span><span></span></div>
      <div class="mini-layout">
        <div class="mini-side"><i></i><i></i><i></i><i></i></div>
        <div class="mini-content"><small>Visão geral</small><strong>Olá, Threebers.</strong><div class="mini-metrics"><i></i><i></i><i></i></div><div class="mini-chart"><b></b><b></b><b></b><b></b><b></b><b></b></div></div>
      </div>
    </article>
    <article class="visual-card visual-card--token"><small>Token semântico</small><code>--3eb-action-primary</code><span><i></i>#3EE7BD</span></article>
    <article class="visual-card visual-card--status"><i></i><span><strong>Sistema operacional</strong><small>Todos os serviços online</small></span></article>
  </div>
</section>

<section class="section reveal">
  <div class="section-heading">
    <div><p class="eyebrow">Arquitetura</p><h2>Do valor bruto até a interface.</h2></div>
    <p>Uma mudança controlada no token certo se propaga pelos temas, componentes e produtos sem criar regras paralelas.</p>
  </div>
  <div class="flow-grid">
    <article><span>01</span><div class="flow-icon"><?= icon('palette', 25) ?></div><h3>Primitivos</h3><p>Paleta, escala, espaço, raio, sombra e movimento.</p><code>--3eb-mint-500</code></article>
    <article><span>02</span><div class="flow-icon"><?= icon('brand', 25) ?></div><h3>Semânticos</h3><p>Decisões nomeadas pelo papel que exercem na interface.</p><code>--3eb-text-primary</code></article>
    <article><span>03</span><div class="flow-icon"><?= icon('components', 25) ?></div><h3>Componentes</h3><p>Elementos reutilizáveis, acessíveis e independentes.</p><code>.button--primary</code></article>
    <article><span>04</span><div class="flow-icon"><?= icon('template', 25) ?></div><h3>Produtos</h3><p>Admin, Portal, Docs e Comunidade com a mesma base.</p><code>[data-product]</code></article>
  </div>
</section>

<section class="section reveal">
  <div class="section-heading compact"><div><p class="eyebrow">Ecossistema</p><h2>Preparado para cada contexto.</h2></div><a class="text-link" href="/templates">Ver templates <?= icon('chevron', 16) ?></a></div>
  <div class="product-grid">
    <a href="/templates/admin" class="product-card"><span class="product-icon product-icon--admin"><?= icon('layout', 25) ?></span><div><h3>Admin</h3><p>Operação e controle</p></div><?= icon('chevron', 18) ?></a>
    <a href="/templates/portal" class="product-card"><span class="product-icon product-icon--portal"><?= icon('home', 25) ?></span><div><h3>Portal</h3><p>Área do usuário</p></div><?= icon('chevron', 18) ?></a>
    <a href="/templates/docs" class="product-card"><span class="product-icon product-icon--docs"><?= icon('code', 25) ?></span><div><h3>Docs</h3><p>Conhecimento técnico</p></div><?= icon('chevron', 18) ?></a>
    <a href="/templates/community" class="product-card"><span class="product-icon product-icon--community"><?= icon('components', 25) ?></span><div><h3>Comunidade</h3><p>Pessoas e discussões</p></div><?= icon('chevron', 18) ?></a>
  </div>
</section>

<section class="cta-panel reveal">
  <div><p class="eyebrow">Experimente</p><h2>Veja a identidade responder em tempo real.</h2><p>Altere cores, raio e densidade sem tocar no código oficial.</p></div>
  <a class="button button--light" href="/laboratorio">Abrir Theme Lab <?= icon('lab', 18) ?></a>
</section>

