<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="<?=$pagesData['description'];?>">
<meta name="description" content="<?=$pagesData['keywords'];?>">
<title><?=$pagesData['title'];?></title>
<link href="<?=DIR.'/'.PATH.'app/css/style.css';?>" rel="stylesheet" media="print">
</head>

<ul>
 <li><a href="<?=Route::getUrl('?sections=pages&page=index');?>.html">Главная</a></li>
 <li><a href="<?=Route::getUrl('?sections=blog&page=blogpage1');?>.html">Блог</a></li>
 <li><a href="/?mode=admin">administrate</a></li>
</ul>