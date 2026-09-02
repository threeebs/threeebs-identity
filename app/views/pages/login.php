<header class="page-heading reveal">
  <p class="eyebrow">Experiências / Acesso</p>
  <h1>Login direto, reconhecível e seguro.</h1>
  <p>Um padrão para páginas de autenticação e caixas inseridas em portais, áreas administrativas ou fluxos protegidos.</p>
</header>

<section class="experience-layout reveal" aria-labelledby="login-page-title">
  <div class="pattern-label"><span>Página completa</span><code>/login</code></div>
  <div class="auth-page-preview">
    <aside class="auth-story">
      <img src="/assets/image/logo/logo-lockup-brand.png" alt="Threeebs" width="170">
      <div>
        <p class="eyebrow">Um só acesso</p>
        <h2 id="login-page-title">Entre no ecossistema.</h2>
        <p>Continue seus projetos, converse com a equipe e acompanhe tudo em um só lugar.</p>
      </div>
      <small>Threeebs · Experiências digitais consistentes</small>
    </aside>
    <div class="auth-form-pane">
      <form class="experience-form auth-form" data-demo-form data-success="Login demonstrativo concluído.">
        <div class="form-heading">
          <span class="brand-mark" aria-hidden="true"><?= icon('login', 22) ?></span>
          <div><p class="eyebrow">Bem-vindo de volta</p><h2>Acesse sua conta</h2></div>
        </div>
        <label class="field"><span>E-mail</span><input type="email" name="email" autocomplete="email" placeholder="voce@empresa.com" required></label>
        <label class="field"><span>Senha</span><input type="password" name="password" autocomplete="current-password" placeholder="Sua senha" minlength="8" required></label>
        <div class="form-row"><label class="check-control"><input type="checkbox" name="remember"><span>Lembrar de mim</span></label><a href="#recuperar">Esqueci minha senha</a></div>
        <button class="button button--primary button--wide" type="submit">Entrar <?= icon('chevron', 17) ?></button>
        <p class="form-footnote">Ainda não tem conta? <a href="/experiencias/registro">Criar uma conta</a></p>
        <p class="form-success" data-form-success hidden role="status"></p>
      </form>
    </div>
  </div>
</section>

<section class="experience-layout reveal" aria-labelledby="login-box-title">
  <div class="pattern-label"><span>Box incorporável</span><code>auth-card</code></div>
  <div class="embed-stage">
    <form class="experience-form auth-card" data-demo-form data-success="Acesso de demonstração enviado.">
      <div class="brand-mark" aria-hidden="true"><?= icon('brand', 24) ?></div>
      <div class="form-heading form-heading--stack"><p class="eyebrow">Área do cliente</p><h2 id="login-box-title">Que bom ter você aqui.</h2><p>Use seu e-mail para continuar.</p></div>
      <label class="field"><span>E-mail</span><input type="email" autocomplete="email" placeholder="nome@empresa.com" required></label>
      <label class="field"><span>Senha</span><input type="password" autocomplete="current-password" placeholder="••••••••" required></label>
      <button class="button button--primary button--wide" type="submit">Continuar</button>
      <p class="form-success" data-form-success hidden role="status"></p>
    </form>
  </div>
</section>

<section class="pattern-guidance reveal" aria-labelledby="login-rules-title">
  <div><p class="eyebrow">Contrato do padrão</p><h2 id="login-rules-title">O produto cuida da segurança.</h2></div>
  <ul class="guidance-list"><li>Use rótulos persistentes, autocomplete e mensagens de erro junto ao campo.</li><li>O exemplo não implementa sessão, CSRF, rate limit, MFA ou recuperação de senha.</li><li>Ao integrar, mantenha as regras de autenticação no projeto consumidor.</li></ul>
</section>
