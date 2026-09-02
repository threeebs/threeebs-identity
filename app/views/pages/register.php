<header class="page-heading reveal">
  <p class="eyebrow">Experiências / Registro</p>
  <h1>Cadastro que explica cada próximo passo.</h1>
  <p>Do convite para uma comunidade à abertura de uma conta corporativa, o usuário sempre sabe o que será pedido e por quê.</p>
</header>

<section class="experience-layout reveal" aria-labelledby="register-page-title">
  <div class="pattern-label"><span>Página completa</span><code>/registro</code></div>
  <div class="register-page-preview">
    <div class="register-summary">
      <img src="/assets/image/logo/logo-symbol-brand.png" alt="" width="58" height="58">
      <p class="eyebrow">Comece por aqui</p>
      <h2 id="register-page-title">Sua nova conta Threeebs.</h2>
      <ol class="step-list"><li class="is-current"><span>1</span><div><strong>Dados essenciais</strong><small>Nome e contato</small></div></li><li><span>2</span><div><strong>Preferências</strong><small>Contexto da experiência</small></div></li><li><span>3</span><div><strong>Confirmação</strong><small>Verifique seu e-mail</small></div></li></ol>
    </div>
    <form class="experience-form register-form" data-demo-form data-success="Cadastro demonstrativo recebido.">
      <div class="form-heading form-heading--stack"><p class="eyebrow">Etapa 1 de 3</p><h2>Crie sua conta</h2><p>Leva menos de dois minutos.</p></div>
      <div class="form-grid"><label class="field"><span>Nome</span><input type="text" autocomplete="given-name" placeholder="Seu nome" required></label><label class="field"><span>Sobrenome</span><input type="text" autocomplete="family-name" placeholder="Seu sobrenome" required></label></div>
      <label class="field"><span>E-mail profissional</span><input type="email" autocomplete="email" placeholder="voce@empresa.com" required></label>
      <label class="field"><span>Crie uma senha</span><input type="password" autocomplete="new-password" minlength="8" placeholder="Mínimo de 8 caracteres" required><small>Use uma senha longa e exclusiva.</small></label>
      <label class="check-control check-control--top"><input type="checkbox" required><span>Li e aceito os <a href="#termos">Termos de uso</a> e o <a href="#privacidade">Aviso de privacidade</a>.</span></label>
      <button class="button button--primary button--wide" type="submit">Criar conta <?= icon('chevron', 17) ?></button>
      <p class="form-success" data-form-success hidden role="status"></p>
    </form>
  </div>
</section>

<section class="experience-layout reveal" aria-labelledby="register-box-title">
  <div class="pattern-label"><span>Box incorporável</span><code>register-card</code></div>
  <div class="embed-stage">
    <form class="experience-form auth-card" data-demo-form data-success="Convite demonstrativo solicitado.">
      <div class="form-heading form-heading--stack"><p class="eyebrow">Comunidade Threeebs</p><h2 id="register-box-title">Crie seu perfil.</h2><p>Uma conta para participar, salvar e acompanhar.</p></div>
      <label class="field"><span>Como devemos chamar você?</span><input type="text" autocomplete="name" placeholder="Seu nome" required></label>
      <label class="field"><span>Seu melhor e-mail</span><input type="email" autocomplete="email" placeholder="voce@email.com" required></label>
      <button class="button button--primary button--wide" type="submit">Receber convite</button>
      <p class="form-success" data-form-success hidden role="status"></p>
    </form>
  </div>
</section>

<section class="pattern-guidance reveal"><div><p class="eyebrow">Contrato do padrão</p><h2>Dados mínimos, propósito claro.</h2></div><ul class="guidance-list"><li>Peça apenas o necessário para concluir esta etapa.</li><li>Termos e privacidade devem abrir antes do envio, sem caixas pré-marcadas.</li><li>Confirme e-mail e estados de erro no backend do produto.</li></ul></section>
