# Threeebs Identity

Referência visual oficial do ecossistema Threeebs: tokens, temas, componentes, layouts, templates e laboratório interativo.

## Executar com Docker

Requisitos:

- Docker Engine
- Docker Compose v2

Na pasta do projeto:

```bash
docker compose up -d --build
```

Acesse:

```text
http://localhost:6020
http://IP-DA-MAQUINA:6020
```

O bind local padrão é `0.0.0.0`, permitindo acesso por outros dispositivos da mesma rede.

Para encerrar:

```bash
docker compose down
```

## Produção

Altere o `.env`:

```env
APP_ENV=production
APP_BIND=127.0.0.1
APP_PORT=6020
APP_DOMAIN=identidade.3eb.site
APP_URL=https://identidade.3eb.site
SESSION_SECURE=true
```

O proxy ou túnel externo deve encaminhar `identidade.3eb.site` para `127.0.0.1:6020`.

## Stack

- PHP 8.3
- Apache 2
- HTML semântico
- CSS nativo
- JavaScript com ES Modules
- Docker Compose

O projeto não exige banco de dados, Composer, Node.js ou Nginx.

## Design system

O manifesto de desenvolvimento está em:

```text
design-system/src/main.css
```

As decisões de identidade e temas ficam em:

```text
design-system/src/tokens.css
```

Após mudar os arquivos do design system, gere a distribuição:

```bash
./bin/build-css.sh
```

O arquivo resultante será:

```text
design-system/dist/threeebs.css
```

## Integração

O pacote foi estruturado para integração com:

- `Tiao-gpt/threeebs-internal`: Admin e Portal internos;
- `Tiao-gpt/threeebs-portal`: Portal público, Docs, Fórum e Comunidade;
- projetos PHP independentes.

Consulte `design-system/adapters/` para os caminhos sugeridos.

O design system altera apenas apresentação. Autenticação, autorização, CSRF, sessões, banco e rotas permanecem sob responsabilidade de cada produto.

## Rotas principais

```text
/
/identidade/logos
/fundamentos/cores
/fundamentos/tipografia
/fundamentos/estrutura
/fundamentos/movimento
/fundamentos/acessibilidade
/componentes
/layouts
/templates
/templates/admin
/templates/portal
/templates/docs
/templates/community
/templates/auth
/laboratorio
/recursos
```

## Testes

```bash
./tests/static-check.sh
./tests/run.sh
```

`static-check.sh` não inicia containers. `run.sh` usa o servidor embutido do PHP para verificar as rotas.
