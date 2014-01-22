<script type="text/javascript">
   function setView(link){
       var date = new Date( new Date().getTime() + 3600*24*1000 );
       document.cookie="display="+link.id+"; path=/; expires="+date.toUTCString();
       location.href=window.location.pathname;
       return false;
   }
   

</script> 
<a href="#" onclick="setView(this)" id="grid" class="grid_list">табличный вид</a> 
<a href="#" onclick="setView(this)" id="list" class="grid_list">линейный вид</a> 


<?php
  echo '<pre>' . print_r($_COOKIE, 1) . '</pre>';
  exit;
  include "classes/Upload.class.php";
  include "classes/Images.class.php";

  highlight_file(__FILE__);

  if(isset($_POST['send'])){
      $validTypes = array('image/jpg','image/jpeg','image/gif','image/bmp'); 
      Upload::$index = 'images';
      Upload::$size = 15000;
      Upload::validType($validTypes);
      
      $files = Upload::validate();
      $result = Upload::uploadFiles($files, 'tmp',false);
      
      echo '<pre>' . print_r($result, 1) . '</pre>';
      
      
      
      if(!empty($result['valid'])){
          foreach($result['valid'] as $file){

                $img = new Images($file['fullpath']);
               # $infoResize = $img->resize(500,false,false, $file['fullpath']); 

              // Устанавливаем данные для водяного знака - (можем не указывать)
              
              /**
              $img->waterSettings(array(
            	'imgAlpha' => false, // Прозрачность от 100 до 0
            	'position' => 'top', // top - вверху, bottom - снизу
            	'align' => 'left', // left - слева, right - справо
            	'margin' => 10 // Отступ от границы
              ));
            	
              // Накладываем водяной знак 
              $arrInfo = $img->waterMarkImg('wm.png','tmp',true);
              */

              // Устанавливаем данные для водяного знака - (можем не указывать)
        
              $img->waterSettings(array(
            	'fontAlpha' => false, // Прозрачность от 0 до 100
            	'fontSize' => 20, // Размер текста
            	'fontFamily' => './fonts/tahoma.ttf', // Шрифт
            	'fontColor' => array(123,123,123), // Цветовая гамма RGB
            	'position' => 'bottom', // top - вверху, bottom - снизу
            	'align' => 'right', // left - слева, right - справо
            	'margin' => 10 // Отступ от границы
              ));
            		
              // Накладываем водяной знак (текст) на файл 1.jpeg
              //$arrInfo = $img->waterMarkText('Автор: ИНСИ');
              // Накладываем водяной знак (текст) на файл 1.jpeg и создаем копию в директории img
              //$arrInfo = $img->waterMarkText('Автор: ИНСИ','tmp');
              // Накладываем водяной знак (текст) на файл 1.jpeg, создаем копию в директории img и создаем 
              // уникальное имя для нового файла
              
              $arrInfo = $img->waterMarkText('Автор: ИНСИ','tmp',true);              
            
              $delete[$file['fullpath']] = Upload::deleteFile($file['fullpath']); 
          
          }
      } 
      
     // echo '<pre>' . print_r($delete, 1) . '</pre>';
      
  }  
  

 
?>

<form enctype="multipart/form-data" method="POST" action="">
 <input type="file" multiple="multiple" name="images[]"/>
 <input type="submit" name="send" value="load"/>
</form>