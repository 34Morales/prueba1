"""Vendor the small Lucide subset used by Blade; no client runtime is required."""
from pathlib import Path
from urllib.request import urlopen
import xml.etree.ElementTree as ET

root = Path(__file__).resolve().parents[1]
icons = {
    'grid': 'layout-dashboard', 'user': 'user-round', 'bag': 'shopping-bag',
    'arrow': 'arrow-right', 'chevron': 'chevron-right', 'search': 'search',
    'menu': 'menu', 'close': 'x', 'logout': 'log-out', 'shield': 'shield-check',
    'mail': 'mail', 'clock': 'clock', 'moon': 'moon', 'check': 'check',
    'help': 'circle-question-mark', 'lock': 'lock-keyhole',
}
base = 'https://raw.githubusercontent.com/lucide-icons/lucide/main/'
snippets = {}
for alias, name in icons.items():
    print('Fetching', name, flush=True)
    with urlopen(base + 'icons/' + name + '.svg', timeout=30) as response:
        document = ET.fromstring(response.read())
    for element in document.iter():
        element.tag = element.tag.split('}')[-1]
    snippets[alias] = '\n'.join(ET.tostring(child, encoding='unicode').strip() for child in document)
with urlopen(base + 'LICENSE', timeout=30) as response:
    license_text = response.read().decode()
target = root / 'resources/views/components/icons'
target.mkdir(parents=True, exist_ok=True)
for alias, content in snippets.items():
    (target / (alias + '.blade.php')).write_text(content + '\n', encoding='utf-8')
(target / 'LICENSE').write_text(license_text, encoding='utf-8')
print('Vendored', len(snippets), 'Lucide icons with license.')
