#!/bin/sh
set -eu

ROOT=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)
OUT="$ROOT/design-system/dist/threeebs.css"

mkdir -p "$(dirname "$OUT")"
{
  printf '/* Threeebs Design System v1.0.0 */\n'
  printf '@layer reset, tokens, base, layout, components, patterns, utilities, product;\n'
  printf '@layer tokens {\n'
  sed '/^@import/d' "$ROOT/design-system/src/tokens.css"
  printf '}\n@layer reset {\n'
  sed '/^@import/d' "$ROOT/design-system/src/base.css"
  printf '}\n@layer components {\n'
  sed '/^@import/d' "$ROOT/design-system/src/components.css"
  printf '}\n@layer utilities {\n'
  sed '/^@import/d' "$ROOT/design-system/src/utilities.css"
  printf '}\n'
} > "$OUT"

printf 'Gerado: %s\n' "$OUT"
