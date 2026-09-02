<header class="page-heading reveal">
  <p class="eyebrow">Experiências / Interesse</p>
  <h1>Convites que respeitam a atenção.</h1>
  <p>Do cadastro em uma newsletter ao primeiro contato de um novo projeto, valor, frequência e próximo passo ficam explícitos.</p>
</header>

<section class="experience-layout reveal" aria-labelledby="project-interest-title">
  <div class="pattern-label"><span>Página completa</span><code>/novo-projeto</code></div>
  <div class="lead-page-preview">
    <div class="lead-intro"><p class="eyebrow">Novo projeto</p><h2 id="project-interest-title">Vamos construir algo útil juntos.</h2><p>Conte o essencial. A equipe organiza o contexto e responde com os próximos passos.</p><div class="response-promise"><span aria-hidden="true"><?= icon('chat', 20) ?></span><div><strong>Resposta humana</strong><small>Retorno em até 2 dias úteis, como expectativa de exemplo.</small></div></div></div>
    <form class="experience-form lead-form" data-demo-form data-success="Interesse demonstrativo registrado.">
      <div class="form-grid"><label class="field"><span>Nome</span><input type="text" autocomplete="name" placeholder="Seu nome" required></label><label class="field"><span>E-mail</span><input type="email" autocomplete="email" placeholder="voce@empresa.com" required></label></div>
      <label class="field"><span>Empresa ou website</span><input type="text" autocomplete="organization" placeholder="Nome ou endereço do projeto"></label>
      <div class="form-grid"><label class="field"><span>Tipo de projeto</span><select required><option value="">Selecione</option><option>Website</option><option>Portal</option><option>Produto digital</option><option>Identidade visual</option></select></label><label class="field"><span>Momento</span><select required><option value="">Selecione</option><option>Explorando possibilidades</option><option>Planejado para este trimestre</option><option>Preciso começar em breve</option></select></label></div>
      <label class="field"><span>O que você quer transformar?</span><textarea rows="5" placeholder="Contexto, objetivo e principal desafio" required></textarea></label>
      <label class="check-control check-control--top"><input type="checkbox" required><span>Autorizo o contato sobre esta solicitação. Meus dados não serão adicionados à newsletter automaticamente.</span></label>
      <button class="button button--primary" type="submit">Enviar interesse <?= icon('chevron', 17) ?></button>
      <p class="form-success" data-form-success hidden role="status"></p>
    </form>
  </div>
</section>

<section class="experience-layout reveal" aria-labelledby="newsletter-title">
  <div class="pattern-label"><span>Box incorporável</span><code>newsletter-card</code></div>
  <div class="newsletter-stage">
    <div class="newsletter-card"><div class="newsletter-copy"><span class="brand-mark" aria-hidden="true"><?= icon('mail', 24) ?></span><div><p class="eyebrow">Notas Threeebs</p><h2 id="newsletter-title">Ideias úteis, sem ruído.</h2><p>Uma seleção mensal sobre design, tecnologia e construção de produtos.</p></div></div><form class="newsletter-form" data-demo-form data-success="Inscrição demonstrativa concluída."><label class="field"><span>Seu e-mail</span><input type="email" autocomplete="email" placeholder="voce@email.com" required></label><button class="button button--primary" type="submit">Quero receber</button><small>Mensal. Cancele quando quiser.</small><p class="form-success" data-form-success hidden role="status"></p></form></div>
  </div>
</section>

<section class="pattern-guidance reveal"><div><p class="eyebrow">Contrato do padrão</p><h2>Consentimentos independentes.</h2></div><ul class="guidance-list"><li>Newsletter e contato comercial têm finalidades diferentes.</li><li>Informe conteúdo, frequência e forma de cancelamento antes do envio.</li><li>Não prometa prazos de resposta que o time não consiga sustentar.</li></ul></section>
