<?php
  class CommentsController extends BaseController{
      public function __construct(){
          parent::__construct();
      }
  }
  
  $controller = new CommentsController;
  $controller->setModel('Comments');
  $model = $controller->model;
  
  $controller->view(ADMIN_TPLS_DIR.'/header.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/comments.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/footer.tpl');   
?>