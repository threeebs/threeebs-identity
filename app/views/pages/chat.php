<header class="page-heading reveal">
  <p class="eyebrow">Experiências / Conversa</p>
  <h1>Chat com contexto, estado e saída.</h1>
  <p>Uma conversa pode ocupar a página inteira ou acompanhar uma jornada como box. Em ambos os casos, status, autoria e próximos passos permanecem visíveis.</p>
</header>

<section class="experience-layout reveal" aria-labelledby="chat-page-title">
  <div class="pattern-label"><span>Página completa</span><code>/chat</code></div>
  <div class="chat-page-demo">
    <aside class="chat-list" aria-label="Conversas"><div class="chat-list__head"><div><p class="eyebrow">Atendimento</p><h2 id="chat-page-title">Conversas</h2></div><button class="icon-button" type="button" aria-label="Nova conversa">+</button></div><label class="chat-search"><?= icon('search', 17) ?><input type="search" placeholder="Buscar conversa" aria-label="Buscar conversa"></label><button class="conversation-item is-active" type="button"><span class="avatar">MA</span><span><strong>Marina · Threeebs</strong><small>Vamos organizar os próximos passos.</small></span><time>14:32</time></button><button class="conversation-item" type="button"><span class="avatar avatar--muted">PR</span><span><strong>Projeto Aurora</strong><small>Briefing recebido</small></span><time>Ontem</time></button></aside>
    <section class="chat-thread-panel" aria-label="Conversa com Marina"><header><div><span class="avatar">MA</span><div><strong>Marina · Threeebs</strong><small><span class="status-dot"></span>Online agora</small></div></div><button class="icon-button" type="button" aria-label="Mais opções">•••</button></header><div class="chat-thread" data-chat-thread><p class="chat-date">Hoje</p><div class="message message--agent"><span>Olá! Posso ajudar a organizar sua ideia em um próximo passo claro.</span><time>14:31</time></div><div class="message message--user"><span>Quero entender como começar um novo portal.</span><time>14:32</time></div><div class="message message--agent"><span>Perfeito. Qual é o principal resultado que esse portal precisa gerar?</span><time>14:32</time></div></div><div class="chat-suggestions"><button type="button" data-chat-suggestion="Organizar um briefing">Organizar um briefing</button><button type="button" data-chat-suggestion="Conhecer as etapas">Conhecer as etapas</button></div><form class="chat-composer" data-chat-form><label class="sr-only" for="chat-page-message">Escreva uma mensagem</label><textarea id="chat-page-message" rows="1" placeholder="Escreva uma mensagem…" required></textarea><button class="button button--primary" type="submit" aria-label="Enviar mensagem"><?= icon('chevron', 18) ?></button></form></section>
  </div>
</section>

<section class="experience-layout reveal" aria-labelledby="chat-box-title">
  <div class="pattern-label"><span>Box incorporável</span><code>chat-widget</code></div>
  <div class="widget-stage">
    <div class="widget-context"><p class="eyebrow">Em uma página</p><h2 id="chat-box-title">Ajuda perto da decisão.</h2><p>O box acompanha o conteúdo sem esconder informações ou bloquear a navegação.</p></div>
    <section class="chat-widget-demo" aria-label="Chat de demonstração"><header><div><span class="avatar">3B</span><div><strong>Converse com a Threeebs</strong><small><span class="status-dot"></span>Respondemos por aqui</small></div></div><button class="icon-button" type="button" aria-label="Minimizar chat">−</button></header><div class="chat-thread chat-thread--compact" data-chat-thread><div class="message message--agent"><span>Oi! O que você quer criar hoje?</span><time>Agora</time></div></div><form class="chat-composer" data-chat-form><label class="sr-only" for="chat-widget-message">Mensagem</label><input id="chat-widget-message" type="text" placeholder="Digite sua mensagem…" required><button class="button button--primary" type="submit" aria-label="Enviar mensagem"><?= icon('chevron', 18) ?></button></form></section>
  </div>
</section>

<section class="pattern-guidance reveal"><div><p class="eyebrow">Contrato do padrão</p><h2>Conversa sem promessas falsas.</h2></div><ul class="guidance-list"><li>Mostre se a resposta é humana, automática ou assíncrona.</li><li>Preserve histórico, horário, autoria e um caminho para encerrar ou escalar.</li><li>O exemplo é local: integrações, persistência, moderação e privacidade pertencem ao produto.</li></ul></section>
