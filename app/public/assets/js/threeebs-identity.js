const root = document.documentElement;
const body = document.body;
const shell = document.querySelector('#app-shell');
const sidebarOpenButton = document.querySelector('[data-sidebar-open]');
const scrim = document.querySelector('.sidebar-scrim');

const icons = {
  check: '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 12 4 4L19 6"/></svg>',
};

function showToast(message) {
  const region = document.querySelector('.toast-region');
  if (!region) return;
  const toast = document.createElement('div');
  toast.className = 'toast-message';
  toast.innerHTML = `<span>${icons.check}</span><strong>${message}</strong>`;
  region.append(toast);
  window.setTimeout(() => toast.remove(), 2800);
}

function applySidebarState(collapsed) {
  shell?.classList.toggle('is-collapsed', collapsed);
  const button = document.querySelector('[data-sidebar-collapse]');
  button?.setAttribute('aria-expanded', String(!collapsed));
  button?.setAttribute('aria-label', collapsed ? 'Expandir menu' : 'Retrair menu');
}

applySidebarState(localStorage.getItem('threeebs-sidebar') === 'collapsed');

document.querySelector('[data-sidebar-collapse]')?.addEventListener('click', () => {
  const next = !shell?.classList.contains('is-collapsed');
  applySidebarState(next);
  localStorage.setItem('threeebs-sidebar', next ? 'collapsed' : 'expanded');
});

function openSidebar() {
  body.classList.add('sidebar-open');
  scrim?.removeAttribute('hidden');
  sidebarOpenButton?.setAttribute('aria-expanded', 'true');
  document.querySelector('.sidebar-close')?.focus();
}

function closeSidebar() {
  body.classList.remove('sidebar-open');
  scrim?.setAttribute('hidden', '');
  sidebarOpenButton?.setAttribute('aria-expanded', 'false');
}

sidebarOpenButton?.addEventListener('click', openSidebar);
document.querySelectorAll('[data-sidebar-close]').forEach((element) => element.addEventListener('click', closeSidebar));
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && body.classList.contains('sidebar-open')) closeSidebar();
});

function syncThemeButton() {
  const light = root.dataset.theme === 'light';
  document.querySelector('[data-theme-toggle]')?.setAttribute('aria-label', light ? 'Ativar tema escuro' : 'Ativar tema claro');
}

syncThemeButton();
document.querySelector('[data-theme-toggle]')?.addEventListener('click', () => {
  const next = root.dataset.theme === 'dark' ? 'light' : 'dark';
  root.dataset.theme = next;
  localStorage.setItem('threeebs-theme', next);
  syncThemeButton();
});

const loader = document.querySelector('[data-loader]');
const dismissLoader = () => {
  loader?.classList.add('is-hidden');
  window.setTimeout(() => loader?.remove(), 400);
};
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => requestAnimationFrame(dismissLoader), { once: true });
} else {
  requestAnimationFrame(dismissLoader);
}
window.setTimeout(dismissLoader, 1600);

const reveals = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -5% 0px' });
  reveals.forEach((element, index) => {
    element.style.transitionDelay = `${Math.min(index, 4) * 45}ms`;
    observer.observe(element);
  });
} else {
  reveals.forEach((element) => element.classList.add('is-visible'));
}

document.addEventListener('click', (event) => {
  const link = event.target.closest('a[href]');
  if (!link || event.defaultPrevented || event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || link.hasAttribute('download') || link.target === '_blank') return;
  const url = new URL(link.href, window.location.href);
  if (url.origin !== window.location.origin || url.pathname === window.location.pathname || link.hash) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || 'onpagereveal' in window) return;
  event.preventDefault();
  body.classList.add('is-leaving');
  window.setTimeout(() => { window.location.href = url.href; }, 150);
});

async function copyText(value) {
  try {
    await navigator.clipboard.writeText(value);
    showToast('Copiado para a área de transferência');
  } catch {
    const textarea = document.createElement('textarea');
    textarea.value = value;
    textarea.style.position = 'fixed';
    textarea.style.opacity = '0';
    document.body.append(textarea);
    textarea.select();
    document.execCommand('copy');
    textarea.remove();
    showToast('Copiado para a área de transferência');
  }
}

document.querySelectorAll('[data-copy-value]').forEach((button) => button.addEventListener('click', () => copyText(button.dataset.copyValue || '')));

document.querySelectorAll('[data-size]').forEach((button) => button.addEventListener('click', () => {
  document.querySelectorAll('[data-size]').forEach((item) => item.classList.remove('is-active'));
  button.classList.add('is-active');
  document.querySelector('[data-component-size]')?.setAttribute('data-component-size', button.dataset.size || 'md');
}));

document.querySelectorAll('[data-demo-theme]').forEach((button) => button.addEventListener('click', () => {
  document.querySelectorAll('[data-demo-theme]').forEach((item) => item.classList.remove('is-selected'));
  button.classList.add('is-selected');
  document.querySelector('[data-theme-demo]')?.setAttribute('data-theme', button.dataset.demoTheme || 'dark');
}));

document.querySelectorAll('.motion-replay').forEach((button) => button.addEventListener('click', () => {
  const track = button.closest('article')?.querySelector('.motion-track');
  track?.classList.remove('is-playing');
  requestAnimationFrame(() => track?.classList.add('is-playing'));
}));

document.querySelectorAll('[data-tabs]').forEach((tabs) => {
  const buttons = tabs.querySelectorAll('[role="tab"]');
  const panel = tabs.querySelector('[role="tabpanel"]');
  const copy = {
    'Visão geral': ['Visão geral do projeto', 'Conteúdo associado à aba selecionada aparece sem perder o contexto.'],
    'Atividade': ['Atividade recente', 'Alterações, publicações e eventos importantes aparecem em ordem cronológica.'],
    'Configurações': ['Configurações do projeto', 'Permissões e preferências ficam agrupadas em uma superfície previsível.'],
  };
  buttons.forEach((button) => button.addEventListener('click', () => {
    buttons.forEach((item) => { item.classList.remove('is-active'); item.setAttribute('aria-selected', 'false'); });
    button.classList.add('is-active'); button.setAttribute('aria-selected', 'true');
    const content = copy[button.textContent.trim()];
    if (panel && content) panel.innerHTML = `<h3>${content[0]}</h3><p>${content[1]}</p>`;
  }));
});

const demoModal = document.querySelector('#demo-modal');
document.querySelector('[data-demo-modal-open]')?.addEventListener('click', () => demoModal?.showModal());
document.querySelectorAll('[data-modal-close]').forEach((button) => button.addEventListener('click', () => demoModal?.close()));
document.querySelectorAll('[data-demo-toast]').forEach((button) => button.addEventListener('click', () => showToast('Ação concluída com sucesso')));

document.querySelectorAll('[data-viewport]').forEach((button) => button.addEventListener('click', () => {
  document.querySelectorAll('[data-viewport]').forEach((item) => item.classList.remove('is-active'));
  button.classList.add('is-active');
  document.querySelector('[data-template-viewport]')?.setAttribute('data-template-viewport', button.dataset.viewport || 'desktop');
}));

const commandDialog = document.querySelector('#command-dialog');
const commandInput = document.querySelector('#command-search');
const commandResults = document.querySelector('#command-results');
const commandItems = [
  ['Introdução', '/'], ['Identidade e logos', '/identidade/logos'], ['Cores e temas', '/fundamentos/cores'],
  ['Tipografia', '/fundamentos/tipografia'], ['Espaço e estrutura', '/fundamentos/estrutura'], ['Movimento', '/fundamentos/movimento'],
  ['Acessibilidade', '/fundamentos/acessibilidade'], ['Componentes', '/componentes'], ['Layouts', '/layouts'],
  ['Templates', '/templates'], ['Template Admin', '/templates/admin'], ['Template Portal', '/templates/portal'],
  ['Template Docs', '/templates/docs'], ['Template Comunidade', '/templates/community'], ['Autenticação', '/templates/auth'],
  ['Login', '/experiencias/login'], ['Registro', '/experiencias/registro'], ['Interesse e newsletter', '/experiencias/interesse'],
  ['Avisos e cookies', '/experiencias/cookies'], ['Chat', '/experiencias/chat'],
  ['Theme Lab', '/laboratorio'], ['Recursos', '/recursos'],
];

function renderCommands(query = '') {
  if (!commandResults) return;
  const normalized = query.trim().toLocaleLowerCase('pt-BR');
  const matches = commandItems.filter(([label]) => label.toLocaleLowerCase('pt-BR').includes(normalized));
  commandResults.innerHTML = matches.length
    ? matches.map(([label, href]) => `<a href="${href}">${icons.check}<span>${label}</span></a>`).join('')
    : '<p style="padding:1rem;color:var(--3eb-text-muted)">Nenhum resultado encontrado.</p>';
}

function openCommand() {
  renderCommands();
  commandDialog?.showModal();
  window.setTimeout(() => commandInput?.focus(), 0);
}

document.querySelector('[data-command-open]')?.addEventListener('click', openCommand);
document.querySelector('[data-dialog-close]')?.addEventListener('click', () => commandDialog?.close());
commandInput?.addEventListener('input', () => renderCommands(commandInput.value));
document.addEventListener('keydown', (event) => {
  if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k') { event.preventDefault(); openCommand(); }
});

document.querySelectorAll('[data-demo-form]').forEach((form) => form.addEventListener('submit', (event) => {
  event.preventDefault();
  if (!form.reportValidity()) return;
  const message = form.dataset.success || 'Demonstração concluída.';
  const status = form.querySelector('[data-form-success]');
  if (status) {
    status.textContent = message;
    status.removeAttribute('hidden');
  }
  showToast(message);
}));

const experienceDialogs = {
  notice: document.querySelector('#notice-dialog'),
  cookies: document.querySelector('#cookie-settings-dialog'),
};

document.querySelector('[data-notice-open]')?.addEventListener('click', () => experienceDialogs.notice?.showModal());
document.querySelectorAll('[data-cookie-settings-open]').forEach((button) => button.addEventListener('click', () => experienceDialogs.cookies?.showModal()));
document.querySelectorAll('[data-experience-dialog-close]').forEach((button) => button.addEventListener('click', () => button.closest('dialog')?.close()));
document.querySelectorAll('[data-cookie-choice]').forEach((button) => button.addEventListener('click', () => {
  const choice = button.dataset.cookieChoice || 'Preferências salvas';
  button.closest('dialog')?.close();
  showToast(`${choice}: escolha demonstrativa salva`);
}));

function appendChatMessage(thread, text, role) {
  const message = document.createElement('div');
  const bubble = document.createElement('span');
  const time = document.createElement('time');
  message.className = `message message--${role}`;
  bubble.textContent = text;
  time.textContent = role === 'user' ? 'Agora' : 'Respondendo';
  message.append(bubble, time);
  thread.append(message);
  thread.scrollTop = thread.scrollHeight;
  return { message, time };
}

document.querySelectorAll('[data-chat-form]').forEach((form) => form.addEventListener('submit', (event) => {
  event.preventDefault();
  const input = form.querySelector('textarea, input');
  const thread = form.closest('.chat-thread-panel, .chat-widget-demo')?.querySelector('[data-chat-thread]');
  const value = input?.value.trim();
  if (!input || !thread || !value) return;
  appendChatMessage(thread, value, 'user');
  input.value = '';
  window.setTimeout(() => {
    const reply = appendChatMessage(thread, 'Recebi sua mensagem. Neste exemplo, a resposta é gerada apenas na interface.', 'agent');
    reply.time.textContent = 'Agora';
  }, 500);
}));

document.querySelectorAll('[data-chat-suggestion]').forEach((button) => button.addEventListener('click', () => {
  const panel = button.closest('.chat-thread-panel');
  const input = panel?.querySelector('[data-chat-form] textarea, [data-chat-form] input');
  if (!input) return;
  input.value = button.dataset.chatSuggestion || '';
  input.focus();
}));


window.threeebsToast = showToast;


