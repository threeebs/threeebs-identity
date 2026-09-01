<header class="page-heading reveal">
  <p class="eyebrow">Biblioteca / Componentes</p><h1>Peças previsíveis para interfaces reais.</h1><p>Cada componente usa tokens semânticos, estados acessíveis e comportamento responsivo.</p>
</header>

<div class="anchor-bar reveal" aria-label="Categorias de componentes">
  <?php foreach (array_keys($groups) as $index => $group): ?><a href="#group-<?= $index ?>"><?= e($group) ?></a><?php endforeach; ?>
</div>

<section class="component-section reveal" id="group-0">
  <div class="component-heading"><div><span>01</span><h2>Ações</h2></div><p>Direcionam decisões com hierarquia clara.</p></div>
  <div class="component-demo">
    <div class="demo-toolbar"><span>Button</span><div><button class="chip is-active" data-size="md">M</button><button class="chip" data-size="sm">S</button></div></div>
    <div class="demo-canvas button-demo" data-component-size="md"><button class="button button--primary">Ação principal</button><button class="button button--secondary">Secundária</button><button class="button button--ghost">Fantasma</button><button class="button button--danger">Excluir</button><button class="button button--primary" disabled>Desabilitado</button><button class="button button--primary"><span class="spinner"></span>Carregando</button></div>
    <div class="code-row"><code>&lt;button class=&quot;button button--primary&quot;&gt;Ação principal&lt;/button&gt;</code><button class="icon-button" data-copy-value="&lt;button class=&quot;button button--primary&quot;&gt;Ação principal&lt;/button&gt;" aria-label="Copiar código"><?= icon('copy',17) ?></button></div>
  </div>
</section>

<section class="component-section reveal" id="group-1">
  <div class="component-heading"><div><span>02</span><h2>Formulários</h2></div><p>Entrada de dados com contexto, validação e foco consistente.</p></div>
  <div class="component-demo"><div class="demo-toolbar"><span>Form controls</span><small>Estados interativos</small></div><div class="demo-canvas form-demo">
    <label class="field"><span>Nome do projeto <b>Obrigatório</b></span><input type="text" value="Threeebs Identity"><small>Use um nome fácil de reconhecer.</small></label>
    <label class="field"><span>Ambiente</span><select><option>Produção</option><option>Homologação</option><option>Desenvolvimento</option></select></label>
    <label class="field field--error"><span>Subdomínio</span><input type="text" value="nome inválido"><small>Use apenas letras, números e hífens.</small></label>
    <div class="choice-row"><label class="check-control"><input type="checkbox" checked><span></span>Notificações</label><label class="switch-control"><input type="checkbox" checked><span></span>Tema automático</label></div>
  </div></div>
</section>

<section class="component-section reveal" id="group-2">
  <div class="component-heading"><div><span>03</span><h2>Feedback</h2></div><p>Comunica sucesso, atenção e falha sem depender apenas da cor.</p></div>
  <div class="feedback-grid">
    <div class="alert alert--success"><span><?= icon('check',18) ?></span><div><strong>Alterações salvas</strong><p>O projeto foi atualizado com sucesso.</p></div></div>
    <div class="alert alert--warning"><span>!</span><div><strong>Atenção necessária</strong><p>Revise os dados antes de publicar.</p></div></div>
    <div class="alert alert--danger"><span>×</span><div><strong>Não foi possível concluir</strong><p>Tente novamente ou consulte os logs.</p></div></div>
    <div class="alert alert--info"><span>i</span><div><strong>Informação</strong><p>Uma nova versão está disponível.</p></div></div>
  </div>
</section>

<section class="component-section reveal" id="group-3">
  <div class="component-heading"><div><span>04</span><h2>Dados</h2></div><p>Estruturas para leitura rápida, comparação e decisão.</p></div>
  <div class="metric-demo"><article><span>Projetos ativos</span><strong>24</strong><small class="positive">↑ 12% este mês</small></article><article><span>Disponibilidade</span><strong>99,98%</strong><small>Últimos 30 dias</small></article><article><span>Tempo médio</span><strong>182ms</strong><small class="positive">↓ 24ms</small></article></div>
  <div class="table-card"><div class="table-head"><div><h3>Ambientes</h3><p>Estado atual dos serviços</p></div><button class="button button--secondary">Filtrar</button></div><div class="table-scroll"><table><thead><tr><th>Projeto</th><th>Ambiente</th><th>Status</th><th>Atualização</th></tr></thead><tbody><tr><td><strong>Threeebs Portal</strong></td><td>Produção</td><td><span class="status status--online">Online</span></td><td>Agora</td></tr><tr><td><strong>Identity</strong></td><td>Desenvolvimento</td><td><span class="status status--progress">Construindo</span></td><td>2 min</td></tr><tr><td><strong>Docs</strong></td><td>Produção</td><td><span class="status status--online">Online</span></td><td>8 min</td></tr></tbody></table></div></div>
</section>

<section class="component-section reveal" id="group-4"><div class="component-heading"><div><span>05</span><h2>Navegação</h2></div><p>Orienta localização, hierarquia e deslocamento.</p></div><div class="tabs-demo" data-tabs><div role="tablist"><button class="is-active" role="tab" aria-selected="true">Visão geral</button><button role="tab" aria-selected="false">Atividade</button><button role="tab" aria-selected="false">Configurações</button></div><div role="tabpanel"><h3>Visão geral do projeto</h3><p>Conteúdo associado à aba selecionada aparece sem perder o contexto.</p></div></div></section>

<section class="component-section reveal" id="group-5"><div class="component-heading"><div><span>06</span><h2>Overlays</h2></div><p>Ações temporárias preservam o contexto da tela.</p></div><div class="component-demo"><div class="demo-canvas"><button class="button button--primary" data-demo-modal-open>Abrir modal</button><button class="button button--secondary" data-demo-toast>Mostrar toast</button><span class="tooltip-wrap"><button class="icon-button" aria-describedby="tooltip-example">?</button><span class="tooltip" id="tooltip-example" role="tooltip">Ajuda contextual</span></span></div></div></section>

<dialog class="demo-modal" id="demo-modal" aria-labelledby="demo-modal-title"><div class="modal-head"><div><p class="eyebrow">Confirmação</p><h2 id="demo-modal-title">Publicar alterações?</h2></div><button class="icon-button" data-modal-close aria-label="Fechar"><?= icon('close',18) ?></button></div><p>As mudanças ficarão disponíveis para todos os usuários deste ambiente.</p><div class="modal-actions"><button class="button button--secondary" data-modal-close>Cancelar</button><button class="button button--primary" data-modal-close data-demo-toast>Publicar</button></div></dialog>

