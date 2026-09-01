# Threeebs Design System

## Camadas

1. `tokens.css`: primitivos, semânticos, temas e produtos.
2. `base.css`: reset, tipografia e comportamento global.
3. `components.css`: controles reutilizáveis.
4. `utilities.css`: utilidades pequenas e acessibilidade.
5. `main.css`: manifesto e ordem de cascata.

Prefixo oficial dos tokens: `--3eb-`.

Os componentes devem consumir tokens semânticos, nunca valores HEX diretamente.

## Temas

```html
<html data-theme="dark" data-product="admin">
```

Valores de `data-product` previstos:

- `identity`
- `admin`
- `portal`
- `docs`
- `forum`
- `community`

