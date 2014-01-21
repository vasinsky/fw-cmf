<?php
 class IndexController extends BaseController{
    public function __construct(){
        parent::__construct();
    }
    
    public function getPageData($route){
        return $this->model->getModel(ROUTE);
    }    
 }
 
 $controller = new IndexController;
 $controller->setModel('Index');
 $model = $controller->model;
 
 $index = isset($_GET['page']) ? $_GET['page'] : 'index';
 $pagesData = $model->getPageData($index);
 
 Bufer::set(array('pagesData'=>$pagesData));
 /**
  *  Страницы имеют права доступа, как и посетители.
  *  Необходимо сверить, чтобы уровень доступа посетителя совпадал
  *  Эту проверку сделает класс ACCESS и вызов Access::validate(); 
  *  в в контроллере страниц /app/controllers/index.php
  *  необходимо вложить в Session pid и acid страницы 
  */ 
 $_SESSION['fw']['pageAccess'] = array('pid'=>$pagesData['pid'], 'acid'=>$pagesData['acid']);
 
 if(!Access::validate()){
    exit(MESSAGE_ACCESS_DENIED);
 }
 
 $controller->view(TPLS_DIR.'/header.tpl');
 $controller->view(TPLS_DIR.'/index.tpl');
 $controller->view(TPLS_DIR.'/footer.tpl');
?>