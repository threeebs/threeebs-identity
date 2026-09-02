#!/bin/sh
set -eu

ROOT=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)
HOST=127.0.0.1
PORT=${TEST_PORT:-18080}
LOG=${TMPDIR:-/tmp}/threeebs-identity-test.log

cd "$ROOT"
php -S "$HOST:$PORT" -t app/public app/public/index.php >"$LOG" 2>&1 &
PID=$!
trap 'kill "$PID" 2>/dev/null || true' EXIT INT TERM

attempt=0
until php -r '$s=@fsockopen($argv[1],(int)$argv[2],$e,$m,.2); if(!$s) exit(1); fclose($s);' "$HOST" "$PORT"; do
  attempt=$((attempt + 1))
  test "$attempt" -lt 30 || { cat "$LOG"; exit 1; }
  sleep .1
done

routes="/ /identidade/logos /fundamentos/cores /fundamentos/tipografia /fundamentos/estrutura /fundamentos/movimento /fundamentos/acessibilidade /componentes /layouts /templates /templates/admin /templates/portal /templates/docs /templates/community /templates/auth /experiencias/login /experiencias/registro /experiencias/interesse /experiencias/cookies /experiencias/chat /laboratorio /recursos"

for route in $routes; do
  body=$(php -r '$url=$argv[1]; $body=@file_get_contents($url); if($body===false) exit(1); echo $body;' "http://$HOST:$PORT$route")
  printf '%s' "$body" | grep -qi '<!doctype html>' || { echo "FALHA: $route" >&2; exit 1; }
  printf '%s' "$body" | grep -qi 'Threeebs Identity' || { echo "FALHA: identidade ausente em $route" >&2; exit 1; }
done

code=$(php -r '$h=get_headers($argv[1],true); preg_match("/ ([0-9]{3}) /",$h[0],$m); echo $m[1]??"";' "http://$HOST:$PORT/rota-inexistente")
test "$code" = "404" || { echo "FALHA: rota 404 retornou $code" >&2; exit 1; }

echo "PASS: todas as rotas responderam corretamente."
