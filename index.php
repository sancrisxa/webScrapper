<table border="0" width="100%">
    <tr>
        <th>Imagem</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Views</th>
        <th>Tempo</th>
        <th>Link</th>
    </tr>


<?php

require 'simple_html_dom.php';

$html = file_get_html('https://www.youtube.com/results?search_query=gta');

$results = $html->find('.yt-lockup');

echo "TOTAL DE RESULTADOS :" .  count($results);

foreach ($results as $video) {
    $imagem = $video->find('.yt-thumb-simple img', 0)->attr['src'] ?? '';
    $tempo = $video->find('.video-time', 0)->plaintext ?? '';
    $link = $video->find('.yt-lockup-title a', 0)->href ?? '';
    $titulo = $video->find('.yt-lockup-title a', 0)->plaintext ?? '';
    $autor = $video->find('.yt-lockup-byline a', 0)->plaintext ?? '';
    $views = $video->find('.yt-lockup-meta-info li', 1)->plaintext ?? '';

?>

    <tr>
        <td>
            <img src="<?php echo $imagem;?>" alt="">
        </td>
        <td>
            <?php echo $titulo;?>
        </td>
        <td>
            <?php echo $autor;?>
        </td>
        <td>
            <?php echo $views;?>
        </td>
        <td>
            <?php echo $tempo;?>
        </td>
        <td>
            <?php echo $link;?>
        </td>
    </tr>

<?php

}

?>
</table>

