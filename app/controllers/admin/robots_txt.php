<?php
  class Robots_txtController extends BaseController{
    public function __construct(){
      parent::__construct();
    }
    
    public function getFileRobots(){
      $file = DIR.'/'.PATH.'robots.txt';  
        
      if(!file_exists($file)){
          file_put_contents($file);
      }
      
      return Files::getData($file);
    }
    
    public function saveRobots($data){
      $file = DIR.'/'.PATH.'robots.txt';  
      
      if(!file_put_contents($file, $data)){
         Bufer::add(array('errors'=>'Ошибка сохранения данных'));
      }
      else{
         header("location:".Route::getUrl('?mode=admin&route=robots_txt&file=robots.txt'));
      } 
    }
  }
  
  $controller = new Robots_txtController;
  $controller->setModel('Robots_txt');
  $model = $controller->model;
  
  Bufer::set(array('Robots_txt'=>$controller->getFileRobots())); 
  
  if(isset($_POST['save_robots'])){
    $controller->saveRobots($_POST['code_robots']);
  }
  
  $controller = new Robots_txtController;
  $controller->setModel('Robots_txt');
  
  $controller->view(ADMIN_TPLS_DIR.'/header.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/robots_txt.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/footer.tpl');   
?>