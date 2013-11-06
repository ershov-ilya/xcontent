<?php

$snippets = array();


$snippet= $modx->newObject('modSnippet');
$snippet->fromArray(array(
    'name' => 'xContent',
    'description' => 'Content cross-linking snippet, for Google and Yandex SEO. NOTE! This snippet for use only in template layout instead of [[*content]] tag!',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/xcontent.snippet.php'),
),'',true,true);
$snippets[] = $snippet;


return $snippets;