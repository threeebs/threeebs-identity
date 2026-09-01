const preview = document.querySelector('#lab-preview');
const previewPage = preview?.querySelector('.lab-preview-page');
const STORAGE_KEY = 'threeebs-lab-tokens';
const defaults = {
  '--3eb-action-primary': '#3ee7bd',
  '--3eb-bg-canvas': '#07100f',
  '--3eb-text-primary': '#edf8f5',
  '--3eb-radius-md': '14px',
  '--lab-density': '1',
};

function readSaved() {
  try { return { ...defaults, ...JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}') }; }
  catch { return { ...defaults }; }
}

let tokens = readSaved();

function applyTokens() {
  Object.entries(tokens).forEach(([name, value]) => previewPage?.style.setProperty(name, value));
  localStorage.setItem(STORAGE_KEY, JSON.stringify(tokens));
}

function syncControls() {
  document.querySelectorAll('[data-token]').forEach((input) => {
    input.value = tokens[input.dataset.token] || input.value;
    const code = input.parentElement?.querySelector('code');
    const dot = input.parentElement?.querySelector('i');
    if (code) code.textContent = input.value;
    if (dot) dot.style.setProperty('--control-color', input.value);
  });
  document.querySelectorAll('[data-token-range]').forEach((input) => {
    const unit = input.dataset.unit || '';
    const raw = (tokens[input.dataset.tokenRange] || input.value).replace(unit, '');
    input.value = raw;
    const output = document.querySelector(`[data-range-value="${input.dataset.output}"]`);
    if (output) output.textContent = `${raw}${unit}`;
  });
}

applyTokens();
syncControls();

document.querySelectorAll('[data-token]').forEach((input) => input.addEventListener('input', () => {
  tokens[input.dataset.token] = input.value;
  applyTokens(); syncControls();
}));

document.querySelectorAll('[data-token-range]').forEach((input) => input.addEventListener('input', () => {
  tokens[input.dataset.tokenRange] = `${input.value}${input.dataset.unit || ''}`;
  applyTokens(); syncControls();
}));

document.querySelectorAll('input[name="lab-theme"]').forEach((input) => input.addEventListener('change', () => {
  preview?.setAttribute('data-lab-theme', input.value);
  if (input.value === 'light') {
    previewPage?.style.setProperty('--3eb-bg-canvas', '#f3f7f6');
    previewPage?.style.setProperty('--3eb-bg-surface', '#ffffff');
    previewPage?.style.setProperty('--3eb-bg-surface-raised', '#e7efed');
    previewPage?.style.setProperty('--3eb-text-primary', '#11201d');
    previewPage?.style.setProperty('--3eb-text-muted', '#667a75');
    previewPage?.style.setProperty('--3eb-border-subtle', 'rgb(14 55 46 / 14%)');
  } else {
    ['--3eb-bg-canvas','--3eb-text-primary'].forEach((name) => previewPage?.style.setProperty(name, tokens[name]));
    previewPage?.style.setProperty('--3eb-bg-surface', '#0e1a18');
    previewPage?.style.setProperty('--3eb-bg-surface-raised', '#132420');
    previewPage?.style.setProperty('--3eb-text-muted', '#849c96');
    previewPage?.style.setProperty('--3eb-border-subtle', 'rgb(130 245 217 / 14%)');
  }
}));

document.querySelector('[data-lab-reset]')?.addEventListener('click', () => {
  tokens = { ...defaults };
  applyTokens(); syncControls();
  window.threeebsToast?.('Valores oficiais restaurados');
});

function download(content, type, filename) {
  const url = URL.createObjectURL(new Blob([content], { type }));
  const link = document.createElement('a');
  link.href = url; link.download = filename; link.click();
  URL.revokeObjectURL(url);
}

document.querySelector('[data-export-css]')?.addEventListener('click', () => {
  const content = `:root {\n${Object.entries(tokens).map(([key, value]) => `  ${key}: ${value};`).join('\n')}\n}`;
  download(content, 'text/css', 'threeebs-custom-theme.css');
  window.threeebsToast?.('Tema CSS exportado');
});

document.querySelector('[data-export-json]')?.addEventListener('click', () => {
  download(JSON.stringify(tokens, null, 2), 'application/json', 'threeebs-custom-theme.json');
  window.threeebsToast?.('Tokens JSON exportados');
});

function luminance(hex) {
  const rgb = hex.replace('#', '').match(/.{2}/g).map((value) => parseInt(value, 16) / 255).map((value) => value <= 0.03928 ? value / 12.92 : ((value + 0.055) / 1.055) ** 2.4);
  return 0.2126 * rgb[0] + 0.7152 * rgb[1] + 0.0722 * rgb[2];
}

function updateContrast() {
  const fg = document.querySelector('[data-contrast-fg]')?.value || '#ffffff';
  const bg = document.querySelector('[data-contrast-bg]')?.value || '#000000';
  const ratio = (Math.max(luminance(fg), luminance(bg)) + 0.05) / (Math.min(luminance(fg), luminance(bg)) + 0.05);
  const level = ratio >= 7 ? 'AAA' : ratio >= 4.5 ? 'AA' : ratio >= 3 ? 'AA grande' : 'Reprovado';
  const message = ratio >= 4.5 ? 'Aprovado para textos comuns' : ratio >= 3 ? 'Apenas textos grandes' : 'Ajuste uma das cores';
  const result = document.querySelector('[data-contrast-result]');
  if (!result) return;
  result.querySelector('strong').textContent = `${ratio.toFixed(1)}:1`;
  result.querySelector('.status').textContent = level;
  result.querySelector('small').textContent = message;
}

document.querySelectorAll('[data-contrast-fg], [data-contrast-bg]').forEach((input) => input.addEventListener('input', updateContrast));
updateContrast();

