#!/bin/sh
set -eu

if [ ! -f /var/www/html/app/public/index.php ]; then
  echo "Threeebs Identity: app/public/index.php não encontrado." >&2
  exit 1
fi

exec "$@"

