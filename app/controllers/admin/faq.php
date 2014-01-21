<?php
  class FaqController extends BaseController{
      public function __construct(){
          parent::__construct();
      }
  }
  
  $controller = new FaqController;
  $controller->setModel('Faq');
  $model = $controller->model;
  
  $controller->view(ADMIN_TPLS_DIR.'/header.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/faq.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/footer.tpl');   
?>