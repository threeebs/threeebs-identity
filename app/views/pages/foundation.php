<header class="page-heading reveal">
  <p class="eyebrow"><?= e($eyebrow) ?></p>
  <h1><?= e($title) ?></h1>
  <p><?= e($description) ?></p>
</header>

<?php if ($kind === 'colors'): ?>
  <section class="section reveal">
    <div class="section-heading compact"><div><h2>Paleta primitiva</h2><p>Valores estáveis e sem significado de interface.</p></div><button class="button button--secondary" data-copy-value="--3eb-mint-500: #3ee7bd;">Copiar token</button></div>
    <div class="swatch-grid">
      <?php foreach ([
        ['Mint 300','#82f5d9','--3eb-mint-300'],['Mint 500','#3ee7bd','--3eb-mint-500'],['Mint 700','#16b991','--3eb-mint-700'],
        ['Ink 950','#050b0d','--3eb-ink-950'],['Ink 900','#07100f','--3eb-ink-900'],['Ink 800','#0e1a18','--3eb-ink-800'],
        ['Cloud 50','#f7faf9','--3eb-cloud-50'],['Cloud 100','#edf3f1','--3eb-cloud-100'],['Cloud 300','#bdcbc7','--3eb-cloud-300']
      ] as [$name,$hex,$token]): ?>
        <button class="swatch" style="--swatch:<?= e($hex) ?>" data-copy-value="<?= e($hex) ?>"><i></i><strong><?= e($name) ?></strong><span><?= e($hex) ?></span><code><?= e($token) ?></code></button>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="section reveal">
    <div class="section-heading"><div><h2>Tokens semânticos</h2><p>O mesmo nome assume valores adequados em cada tema.</p></div><div class="segmented" role="group" aria-label="Tema da demonstração"><button class="is-selected" data-demo-theme="dark">Escuro</button><button data-demo-theme="light">Claro</button></div></div>
    <div class="token-table-wrap" data-theme-demo="dark">
      <table class="token-table"><thead><tr><th>Token</th><th>Função</th><th>Amostra</th><th>Valor atual</th></tr></thead><tbody>
      <?php foreach ([['--3eb-bg-canvas','Fundo global','var(--3eb-bg-canvas)'],['--3eb-bg-surface','Superfície principal','var(--3eb-bg-surface)'],['--3eb-text-primary','Texto principal','var(--3eb-text-primary)'],['--3eb-text-muted','Texto secundário','var(--3eb-text-muted)'],['--3eb-action-primary','Ação principal','var(--3eb-action-primary)'],['--3eb-border-subtle','Divisão sutil','var(--3eb-border-subtle)']] as [$token,$role,$value]): ?>
        <tr><td><code><?= e($token) ?></code></td><td><?= e($role) ?></td><td><i class="token-dot" style="--token-color:<?= e($value) ?>"></i></td><td><?= e($value) ?></td></tr>
      <?php endforeach; ?>
      </tbody></table>
    </div>
  </section>
<?php elseif ($kind === 'type'): ?>
  <section class="type-specimens reveal">
    <article><div><span>Display / Space Grotesk</span><code>64 / 1.02 / -0.05em</code></div><p class="type-display">Construa o que ainda não existe.</p></article>
    <article><div><span>Heading / Space Grotesk</span><code>40 / 1.08 / -0.04em</code></div><p class="type-heading">Uma linguagem para todo o ecossistema.</p></article>
    <article><div><span>Body / Inter</span><code>16 / 1.65 / normal</code></div><p class="type-body">Interfaces claras permitem que pessoas entendam onde estão, o que mudou e qual é o próximo passo.</p></article>
    <article><div><span>Code / JetBrains Mono</span><code>14 / 1.55 / normal</code></div><p class="type-code">--3eb-action-primary: var(--3eb-mint-500);</p></article>
  </section>
  <section class="section reveal"><h2>Escala responsiva</h2><div class="scale-list"><?php foreach ([['Display','clamp(3rem, 7vw, 6.5rem)'],['H1','clamp(2.35rem, 5vw, 4.5rem)'],['H2','clamp(1.8rem, 3vw, 3rem)'],['H3','1.25rem'],['Body','1rem'],['Small','0.875rem']] as [$label,$value]): ?><div><span><?= e($label) ?></span><strong style="font-size:<?= e(str_starts_with($value,'clamp') ? 'clamp(1rem,2.5vw,2rem)' : $value) ?>">Aa</strong><code><?= e($value) ?></code></div><?php endforeach; ?></div></section>
<?php elseif ($kind === 'structure'): ?>
  <section class="section reveal"><h2>Escala de espaço</h2><div class="spacing-list"><?php foreach ([1,2,3,4,6,8,12,16] as $space): ?><div><code>--3eb-space-<?= $space ?></code><i style="width:calc(var(--3eb-space-<?= $space ?>) * 2)"></i><span><?= $space * 4 ?>px</span></div><?php endforeach; ?></div></section>
  <section class="section reveal"><div class="section-heading"><div><h2>Raios e elevação</h2><p>A forma acompanha a densidade e o papel da superfície.</p></div></div><div class="radius-grid"><article class="radius-sm"><span>Small</span><code>8px</code></article><article class="radius-md"><span>Medium</span><code>14px</code></article><article class="radius-lg"><span>Large</span><code>22px</code></article><article class="radius-pill"><span>Pill</span><code>999px</code></article></div></section>
  <section class="section reveal"><h2>Grid fluido</h2><div class="grid-demo"><?php for($i=1;$i<=12;$i++): ?><span><?= $i ?></span><?php endfor; ?></div><p class="note">O shell ocupa 100% da viewport. Limites de largura são aplicados apenas em blocos de leitura.</p></section>
<?php elseif ($kind === 'motion'): ?>
  <section class="motion-grid reveal">
    <?php foreach ([['Rápida','120ms','Feedback imediato'],['Padrão','220ms','Mudanças de estado'],['Expressiva','420ms','Entrada de página']] as [$name,$time,$usage]): ?><article><div class="motion-track"><i style="--motion-time:<?= e($time) ?>"></i></div><h3><?= e($name) ?> <code><?= e($time) ?></code></h3><p><?= e($usage) ?></p><button class="button button--secondary motion-replay">Reproduzir</button></article><?php endforeach; ?>
  </section>
  <section class="principle-list reveal"><article><span>01</span><div><h3>Explique continuidade</h3><p>Use movimento para conectar origem e destino, nunca apenas para decorar.</p></div></article><article><span>02</span><div><h3>Preserve resposta</h3><p>A interface deve reagir imediatamente, mesmo quando a operação continuar em segundo plano.</p></div></article><article><span>03</span><div><h3>Respeite preferências</h3><p>Com <code>prefers-reduced-motion</code>, transições deixam de deslocar conteúdo.</p></div></article></section>
<?php else: ?>
  <section class="a11y-score reveal"><div><span>AA</span><strong>Meta mínima</strong><small>WCAG 2.2</small></div><p>A conformidade é verificada em contraste, foco visível, navegação por teclado, semântica e alternativas ao movimento.</p></section>
  <section class="check-grid reveal">
    <?php foreach ([['Contraste','4.5:1 para textos comuns e 3:1 para textos grandes.'],['Teclado','Toda ação pode ser alcançada e operada sem mouse.'],['Foco','Indicador perceptível, consistente e nunca removido.'],['Semântica','Elementos HTML comunicam função antes do estilo.'],['Movimento','Preferências de redução eliminam deslocamentos.'],['Touch','Alvos interativos possuem pelo menos 44 × 44 pixels.']] as [$name,$copy]): ?><article><span><?= icon('check',18) ?></span><div><h3><?= e($name) ?></h3><p><?= e($copy) ?></p></div></article><?php endforeach; ?>
  </section>
<?php endif; ?>

