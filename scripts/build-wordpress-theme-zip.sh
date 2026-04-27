#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME_DIR="$ROOT_DIR/wordpress-theme/karma-devi-trust"
DIST_DIR="$ROOT_DIR/dist"
ZIP_PATH="$DIST_DIR/karma-devi-trust-theme.zip"

if [[ ! -d "$THEME_DIR" ]]; then
  echo "Theme directory not found: $THEME_DIR" >&2
  exit 1
fi

mkdir -p "$DIST_DIR"
rm -f "$ZIP_PATH"

(
  cd "$ROOT_DIR/wordpress-theme"
  zip -r "$ZIP_PATH" karma-devi-trust >/dev/null
)

echo "Created: $ZIP_PATH"
