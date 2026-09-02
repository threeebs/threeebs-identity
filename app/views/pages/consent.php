<header class="page-heading reveal">
  <p class="eyebrow">Experiências / Avisos e cookies</p>
  <h1>Escolhas claras, sem atalhos obscuros.</h1>
  <p>Referências de aviso, banner e preferências para comunicar impacto, finalidade e controle com a mesma linguagem da Threeebs.</p>
</header>

<section class="experience-layout reveal" aria-labelledby="notice-title">
  <div class="pattern-label"><span>Pop-up de aviso</span><code>notice-dialog</code></div>
  <div class="notice-stage">
    <div class="notice-context"><span class="notice-context__icon" aria-hidden="true"><?= icon('shield', 28) ?></span><div><p class="eyebrow">Antes de interromper</p><h2 id="notice-title">Use pop-ups para decisões importantes.</h2><p>O aviso deve dizer o que aconteceu, qual o impacto e o que cada ação fará.</p></div></div>
    <button class="button button--primary" type="button" data-notice-open>Visualizar aviso</button>
  </div>
  <dialog class="experience-dialog" id="notice-dialog" aria-labelledby="notice-dialog-title" aria-describedby="notice-dialog-copy">
    <button class="icon-button dialog-close" type="button" data-experience-dialog-close aria-label="Fechar aviso"><?= icon('close', 18) ?></button>
    <span class="dialog-symbol" aria-hidden="true"><?= icon('shield', 28) ?></span>
    <p class="eyebrow">Atualização necessária</p>
    <h2 id="notice-dialog-title">Revise suas preferências</h2>
    <p id="notice-dialog-copy">Algumas escolhas mudaram desde sua última visita. Confira as categorias antes de continuar.</p>
    <div class="dialog-actions"><button class="button button--ghost" type="button" data-experience-dialog-close>Agora não</button><button class="button button--primary" type="button" data-experience-dialog-close data-demo-toast>Revisar preferências</button></div>
  </dialog>
</section>

<section class="experience-layout reveal" aria-labelledby="cookie-banner-title">
  <div class="pattern-label"><span>Box incorporável</span><code>cookie-banner</code></div>
  <div class="browser-stage">
    <div class="browser-placeholder"><span></span><span></span><span></span><div></div><div></div></div>
    <section class="cookie-banner" aria-labelledby="cookie-banner-title">
      <div><p class="eyebrow">Sua privacidade</p><h2 id="cookie-banner-title">Você decide como usamos cookies.</h2><p>Usamos cookies essenciais para o funcionamento. Com sua escolha, também podemos medir uso e personalizar a experiência.</p><a href="#cookie-terms">Ler termos de cookies</a></div>
      <div class="cookie-actions"><button class="button button--ghost" type="button" data-cookie-choice="Somente essenciais">Somente essenciais</button><button class="button button--ghost" type="button" data-cookie-settings-open>Personalizar</button><button class="button button--primary" type="button" data-cookie-choice="Todos os cookies">Aceitar todos</button></div>
    </section>
  </div>
</section>

<section class="cookie-terms reveal" id="cookie-terms" aria-labelledby="cookie-terms-title">
  <div class="cookie-terms__intro"><p class="eyebrow">Termos de referência</p><h2 id="cookie-terms-title">Explique antes de pedir uma escolha.</h2><p>Este conteúdo demonstra estrutura e hierarquia. Finalidades, fornecedores, duração e bases legais devem ser adaptados ao produto e revisados por privacidade e jurídico.</p></div>
  <div class="cookie-table" role="table" aria-label="Categorias de cookies">
    <div class="cookie-row cookie-row--head" role="row"><span role="columnheader">Categoria</span><span role="columnheader">Finalidade de exemplo</span><span role="columnheader">Controle</span></div>
    <div class="cookie-row" role="row"><strong role="cell">Essenciais</strong><span role="cell">Sessão, segurança e preferências básicas.</span><span role="cell"><span class="status-dot"></span>Sempre ativos</span></div>
    <div class="cookie-row" role="row"><strong role="cell">Experiência</strong><span role="cell">Lembrar escolhas que melhoram a navegação.</span><span role="cell">Opcional</span></div>
    <div class="cookie-row" role="row"><strong role="cell">Medição</strong><span role="cell">Entender uso e desempenho de forma agregada.</span><span role="cell">Opcional</span></div>
    <div class="cookie-row" role="row"><strong role="cell">Comunicação</strong><span role="cell">Avaliar campanhas e conteúdo de interesse.</span><span role="cell">Opcional</span></div>
  </div>
</section>

<dialog class="experience-dialog cookie-settings" id="cookie-settings-dialog" aria-labelledby="cookie-settings-title">
  <button class="icon-button dialog-close" type="button" data-experience-dialog-close aria-label="Fechar preferências"><?= icon('close', 18) ?></button>
  <p class="eyebrow">Centro de preferências</p><h2 id="cookie-settings-title">Escolha suas categorias</h2><p>Você pode alterar estas escolhas no produto sempre que precisar.</p>
  <div class="preference-list"><div><div><strong>Essenciais</strong><small>Necessários para operar com segurança.</small></div><span class="required-badge">Sempre ativo</span></div><label><span><strong>Experiência</strong><small>Memoriza preferências de navegação.</small></span><input type="checkbox" checked></label><label><span><strong>Medição</strong><small>Ajuda a melhorar páginas e fluxos.</small></span><input type="checkbox"></label><label><span><strong>Comunicação</strong><small>Avalia campanhas e conteúdo.</small></span><input type="checkbox"></label></div>
  <div class="dialog-actions"><button class="button button--ghost" type="button" data-cookie-choice="Somente essenciais">Recusar opcionais</button><button class="button button--primary" type="button" data-cookie-choice="Preferências personalizadas">Salvar escolhas</button></div>
</dialog>

<section class="pattern-guidance reveal"><div><p class="eyebrow">Contrato do padrão</p><h2>Interface não substitui governança.</h2></div><ul class="guidance-list"><li>Dê o mesmo destaque visual para aceitar, recusar e personalizar quando aplicável.</li><li>Não ative categorias opcionais antes da escolha do usuário.</li><li>Registre preferências e ofereça um caminho permanente para alterá-las.</li></ul></section>
