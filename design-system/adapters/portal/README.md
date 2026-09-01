# Adaptador: threeebs-portal

Destino atual sugerido:

```text
app/public/assets/threeebs.css
```

Carregue o design system antes do CSS local:

```html
<link rel="stylesheet" href="/assets/threeebs.css">
<link rel="stylesheet" href="/assets/style.css">
```

Use o contexto correspondente:

```html
<body data-theme="dark" data-product="portal">
<body data-theme="dark" data-product="docs">
<body data-theme="dark" data-product="forum">
<body data-theme="dark" data-product="community">
```

O roteamento por host, Markdown, grants de acesso, sessões e proteção do backend permanecem inalterados.

