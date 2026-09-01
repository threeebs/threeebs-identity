# Adaptador: threeebs-internal

Destinos atuais:

```text
apps/admin/public/assets/css/threeebs.css
apps/portal/public/assets/css/threeebs.css
```

Copie `design-system/dist/threeebs.css` para os destinos aprovados e carregue-o antes do CSS específico do contexto:

```html
<link rel="stylesheet" href="/assets/css/threeebs.css">
<link rel="stylesheet" href="/assets/css/main.css">
```

No Admin:

```html
<body data-theme="dark" data-product="admin">
```

No Portal interno:

```html
<body data-theme="dark" data-product="portal">
```

Não substitua funções de autenticação, autorização, tenant, sessão ou CSRF.

