#!/bin/sh
set -eu

ROOT=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)
cd "$ROOT"

required_files="
Dockerfile
docker-compose.yml
.env.example
app/public/index.php
app/shared/bootstrap.php
app/views/layouts/identity.php
app/public/assets/css/identity.css
app/public/assets/js/app.js
app/public/assets/js/laboratory.js
design-system/src/main.css
design-system/src/tokens.css
design-system/dist/threeebs.css
"

for file in $required_files; do
  test -s "$file" || { echo "FALHA: arquivo ausente ou vazio: $file" >&2; exit 1; }
done

if grep -Rni "nginx" Dockerfile docker-compose.yml infrastructure 2>/dev/null; then
  echo "FALHA: referência inesperada ao Nginx." >&2
  exit 1
fi

grep -q 'php:8.3-apache' Dockerfile
grep -q 'APP_BIND=0.0.0.0' .env.example
grep -q 'APP_PORT=6020' .env.example
grep -q '\${APP_BIND:-0.0.0.0}:\${APP_PORT:-6020}:80' docker-compose.yml
grep -q -- '--3eb-action-primary' design-system/src/tokens.css
grep -q 'prefers-reduced-motion' app/public/assets/css/responsive.css

if command -v php >/dev/null 2>&1; then
  find app -name '*.php' -print | while IFS= read -r file; do
    php -l "$file" >/dev/null
  done
else
  echo "AVISO: PHP local ausente; execute a validação PHP dentro do container."
fi

echo "PASS: estrutura, PHP, Docker e tokens validados."
