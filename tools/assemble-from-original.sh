#!/usr/bin/env bash
# Copies the site's static files (images, PDFs, CSS, JS, fonts, uploads ...) from the
# original site folder into root/ of this repository. PHP code is never copied: every
# page in root/ is the rebuilt PHP 8.4 version.
#
#   tools/assemble-from-original.sh /path/to/public_html/root
#
set -euo pipefail
SRC=${1:?usage: $0 /path/to/original/public_html/root}
DEST=$(cd "$(dirname "$0")/.." && pwd)/root

# Things that are intentionally not part of the new site
EXCLUDE='^(old|pfn|img-galleries|PHPMailer|stripe-php|public_html|cgi-bin)/|^admin/filemanager(/|\.zip$)|^admin/tinymce/plugins/(filemanager|responsivefilemanager)/|^captcha/(examples|audio|backgrounds|database)/|^captcha/(captcha\.html|example_form.*|securimage_play.*|WavFile\.php|README.*)$|(^|/)error_log$|\.(log|ini|php1|zzz|bak)$|^php\.fcgi$|(^|/)\.ftpquota$|(^|/)\.htaccess(\.htm)?$|^admin/(source|thumbs)/|^cedar/New Text Document\.txt$|^(admin/)?(LICENSE\.TXT|changelog\.txt|README\.md)$'

copied=0; skipped=0
cd "$SRC"
while IFS= read -r -d '' f; do
  rel=${f#./}
  if [[ $rel == *.php ]] || [[ $rel =~ $EXCLUDE ]]; then
    skipped=$((skipped+1)); continue
  fi
  if [[ -e "$DEST/$rel" ]]; then continue; fi   # never overwrite rebuilt files
  mkdir -p "$DEST/$(dirname "$rel")"
  cp -p "$f" "$DEST/$rel"
  copied=$((copied+1))
done < <(find . -type f -print0)
echo "copied $copied static files, skipped $skipped (PHP or excluded)"
