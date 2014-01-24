<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="<?=$pagesData['description'];?>">
<meta name="description" content="<?=$pagesData['keywords'];?>">
<title><?=$pagesData['title'];?></title>
<link href="<?=DIR.'/'.PATH.'app/css/style.css';?>" rel="stylesheet" media="print">

<script src="/<?=PATH;?>app/js/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/<?=PATH;?>app/js/lightbox/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/<?=PATH;?>app/js/lightbox/js/lightbox-2.6.min.js"></script>
<link href="/<?=PATH;?>app/js/lightbox/css/lightbox.css" rel="stylesheet" />

</head>

<ul>
 <li><a href="<?=Route::getUrl('?sections=pages&page=index');?>">Главная</a></li>
 <li><a href="<?=Route::getUrl('?sections=blog&page=blogpage1');?>">Блог</a></li>
 <li><a href="<?=Route::getUrl('?sections=informations&page=kak_vklyuchit_javascript');?>">JavaScript</a></li>
 <li><a href="/?mode=admin">administrate</a></li>
</ul>