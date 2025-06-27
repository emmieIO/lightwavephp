<?php

namespace Emmieio\PhpViteStarter\Helpers;

class Vite
{
    public static function asset(string $entry): string
    {
        $devServer = env('VITE_DEV_SERVER','http://localhost:5173');
        $manifestPath = __DIR__ . '/../../public/dist/.vite/manifest.json';

        // If Vite dev server is running
        if (@file_get_contents("$devServer/@vite/client")) {
            $entry = ltrim($entry, '/'); // clean
            return <<<HTML
<script type="module" src="$devServer/@vite/client"></script>
<script type="module" src="$devServer/js/{$entry}"></script>
HTML;
        }

        if (!file_exists($manifestPath)) {
            return "<!-- vite manifest not found -->";
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        // Try exact match, or fuzzy match (like js/main.js)
        $key = array_key_first(array_filter(
            $manifest,
            fn($_, $k) => str_ends_with($k, "/$entry") || $k === $entry,
            ARRAY_FILTER_USE_BOTH
        ));

        if (!$key || !isset($manifest[$key]['file'])) {
            return "<!-- vite entry not found: $entry -->";
        }

        $file = $manifest[$key]['file'];
        $css = $manifest[$key]['css'][0] ?? '';

        $tags = '';
        if ($css) {
            $tags .= "<link rel=\"stylesheet\" href=\"/dist/{$css}\">\n";
        }
        $tags .= "<script type=\"module\" src=\"/dist/{$file}\"></script>";

        return $tags;
    }
}
