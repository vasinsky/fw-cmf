<?php 
 class IndexController extends BaseController{
    public function __construct(){
        parent::__construct();
    }
 }

 $controller = new IndexController;
 $controller->setModel('Index');
 $model = $controller->model;

 //$result = $model->sqlQuery("select count(pid) as count from pages");
 //$countPages = ($result !== false) ? $result->fetch_assoc() : 0; 
 //Bufer::set(array('countPages'=>$countPages['count']));
 $controller->view(ADMIN_TPLS_DIR.'/header.tpl');
 $controller->view(ADMIN_TPLS_DIR.'/index.tpl');
 $controller->view(ADMIN_TPLS_DIR.'/footer.tpl'); 

?>

