<header class="page-heading reveal">
  <p class="eyebrow">Identidade / Logos</p>
  <h1>O gato que conecta o ecossistema.</h1>
  <p>O símbolo, wordmark e lockup Threeebs existem em três variações para manter contraste e reconhecimento em qualquer superfície.</p>
</header>

<section class="logo-showcase reveal">
  <article class="logo-stage logo-stage--dark"><span>Fundo escuro</span><img src="/assets/image/logo/logo-lockup-brand.png" alt="Threeebs em verde"></article>
  <article class="logo-stage logo-stage--mint"><span>Cor da marca</span><img src="/assets/image/logo/logo-lockup-black.png" alt="Threeebs em preto"></article>
  <article class="logo-stage logo-stage--light"><span>Fundo claro</span><img src="/assets/image/logo/logo-lockup-black.png" alt="Threeebs em preto"></article>
</section>

<section class="section reveal">
  <div class="section-heading"><div><p class="eyebrow">Variações</p><h2>Escolha pela aplicação.</h2></div><p>Nunca reconstrua, distorça, incline ou altere as proporções do arquivo original.</p></div>
  <div class="asset-grid">
    <?php foreach ([['symbol','Símbolo','Avatares, favicons e áreas compactas'],['wordmark','Wordmark','Cabeçalhos com pouco espaço vertical'],['lockup','Lockup','Assinatura preferencial da marca']] as [$file,$name,$usage]): ?>
      <article class="asset-card">
        <div><img src="/assets/image/logo/logo-<?= e($file) ?>-brand.png" alt="<?= e($name) ?> Threeebs"></div>
        <h3><?= e($name) ?></h3><p><?= e($usage) ?></p>
        <a href="/assets/image/logo/logo-<?= e($file) ?>-brand.png" download>Baixar PNG <?= icon('download', 16) ?></a>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section split-section reveal">
  <div><p class="eyebrow">Área de proteção</p><h2>Dê espaço para a marca respirar.</h2><p>Use como margem mínima a largura de um olho do símbolo em todos os lados. Nenhum texto, borda ou outro elemento deve entrar nessa área.</p></div>
  <div class="clearspace-demo"><span></span><img src="/assets/image/logo/logo-symbol-brand.png" alt="Símbolo Threeebs com área de proteção"><i>x</i><b>x</b></div>
</section>

