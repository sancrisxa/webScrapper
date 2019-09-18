<?php

require 'simple_html_dom.php';

$html = file_get_html('https://www.youtube.com/results?search_query=gta');

$results = $html->find('.yt-lockup');

echo "TOTAL DE RESULTADOS :" .  count($results);

foreach ($results as $videos) {
    $imagem = $videos->find('.yt-thumb-simple img', 0);

    print_r($imagem);
}