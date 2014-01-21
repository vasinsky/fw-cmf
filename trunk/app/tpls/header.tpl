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
 <li><a href="<?=Route::getUrl('?sections=main&page=index');?>">Главная</a></li>
 <li><a href="<?=Route::getUrl('?sections=main&page=about');?>">О нас</a></li>
 <li><a href="<?=Route::getUrl('?sections=main&page=contacts');?>">Контакты</a></li>
 <li><a href="<?=Route::getUrl('?sections=blog&page=history');?>">История</a></li>
</ul>