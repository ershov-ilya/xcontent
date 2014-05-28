<?php
 /**
 * Project: xContent
 * Date: 28.05.14
 * Time: 8:56
 * Author:  ILYA ERSHOV
 * http://about.me/ershov.ilya
 * GitHub:  https://github.com/ershov-ilya
 * Edited in PhpStorm.
 */

// Init
$defconfig = array(
    'id' => $modx->resource->get('id'),
    'context' => $modx->context->key,
    'links_limit' => 3,
    'skip_lines' => 0,
    'skip_page_tv_id' => 8
);
$config = array_merge($defconfig, $scriptProperties);

define('DEBUG', 0);
define('SKIP_LINES', $config['skip_lines']); // $config['skip_lines']
define('LINKS_LIMIT', $config['links_limit']); // $config['links_limit']
$output='';

include_once (MODX_ASSETS_PATH .'components/xcontent/xcontent.config.php');

/* @var modX $modx */
/* @var modResource $resource */

//read text
$content = $modx->resource->get('content');
// check config
$disable = $modx->resource->getTVValue($config['skip_page_tv_id']);
if(!isset($REG) || $disable) { return $content;}
$arr = explode("\n", $content);



if(DEBUG) $output.= "<pre>";
// Начинаем разбор
$links=0;
$str_num=1;
foreach($arr as $str)
{
    $res=0;
    $i=0;

    // Пропускаем строки уже содержащие ссылки или картинки
    $skip=0;
    if(preg_match('/<a\s/', $str)) $skip=1;
    if(preg_match('/<img\s/', $str)) $skip=1;
    if(preg_match('/<h[1-8]{1}/', $str)) $skip=1;

    // Также пропускаем первую строку и если лимит ссылок уже достигнут
    if($links < LINKS_LIMIT && !$skip && $str_num>SKIP_LINES)
    {
        foreach($REG as $reg)
        {
            $res = preg_match($reg, $str, $match);
            if($res==0) {  $i++; continue; }

            if(DEBUG) $output.= "\n -------------------- \n(i=$i) "."Str: ".$str."\n";;

            if($res)
            {
                if(DEBUG) $output.= "$links) Found: ".$match[1]."\n";

                // Replace
                $tag = "<a href='$LINK[$i]'>$match[1]</a>";
                $str = preg_replace($REG[$i], $tag, $str, 1);
            }
            $links++;
            if(DEBUG) $output.= "links = $links\n";
            break;
        }
    }

    if(DEBUG) $output.= ">> ";
    $output.= $str;
    $str_num++;
}
/**/
if(DEBUG) $output.= "</pre>";

return $output;
