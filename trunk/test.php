<?php


function getData($url){
    $url = urldecode($url);
    $content = file_get_contents($url);
    
    preg_match_all('#<ul class="productDescription">(.*)</ul>#is', $content, $data);
    
    return isset($data[1][0]) ? $data[1][0] : false;
}

$data = getData('http://bumaga-s.ru/%D1%82%D0%BE%D0%B2%D0%B0%D1%80/%D0%91%D1%83%D0%BC%D0%B0%D0%B3%D0%B0_SvetoCopy__%D0%904_80%D0%B3_%D0%BC_500%D0%BB_?ajax=1');

if($data !== false){
    echo '<ul>'.$data.'</ul>';
}

?>