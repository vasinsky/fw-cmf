<?php
  class DeletedpagesController extends BaseController{
      public function __construct(){
          parent::__construct();
      }

      public function getListSections(){
         $model = $this->model;
         /**
          * Список разделов
          */ 
         $result = $model->sqlQuery("select * from section");

         if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $listSections[] = $row;
            }
         }
         else{
            $listSections = array(
                              array(
                                    'sid'=>1,
                                    'index'=>'main',
                                    'name'=>'основной',
                                    'description'=>'Основной раздел'
                                    )  
            );
         }
         
         return $listSections;     
      }      

      public function getListPages(){
         $model = $this->model;

         /**
          * Список страниц
          */ 
         $result = $model->getPaginateData("select * 
                                            from pages p
                                            left join section s on p.sid = s.sid where p.display = 3 order by p.sid , pid DESC
                                            ", 25,CUR_PAGE);
         if(count($result)>0){
             $listPages = $result;
             //$listPages['paginate'] = isset($result['paginate']) ? $result['paginate'] : false;
         }
         else{
            $listPages = null;
         }
         return $listPages;

      }
      
      public function killPage($pid){
         $result = $this->model->killPage($pid);
         
         return $result;
      }
      
      public function recoveryPage($pid){
         $result = $this->model->recoveryPage($pid);
         
         return $result;
      }      
  }
  
  $controller = new DeletedpagesController;
  $controller->setModel('Deletedpages');
  $model = $controller->model;
  
  if(isset($_GET['killpage'])){
     $delete = $controller->killPage((int)$_GET['killpage']);
     
     if($delete === false){
          Bufer::set(array(
                           'errors'=>array('Ошибка при удалении страницы'), 
                           'listPages'=>array(
                                              'data'=>$controller->getListPages(),
                                              'paginate'=>$controller->paginate()
                                             ),
                           'listSections'=>$controller->getListSections()
                           )
                     );        
     }
     else{
        header("location: ".Route::getUrl('?mode=admin&route=deletedpages'));
     }
  }
  
  if(isset($_GET['recoverypage'])){
     $delete = $controller->recoveryPage((int)$_GET['recoverypage']);
     
     if($delete === false){
          Bufer::set(array(
                           'errors'=>array('Ошибка при восстановлении страницы'), 
                           'listPages'=>array(
                                              'data'=>$controller->getListPages(),
                                              'paginate'=>$controller->paginate()
                                             ),
                           'listSections'=>$controller->getListSections()
                           )
                     );        
     }
     else{
        header("location: ".Route::getUrl('?mode=admin&route=deletedpages'));
     }
  }  
  
  Bufer::set(array(
                   'listPages'=>array(
                                      'data'=>$controller->getListPages(),
                                      'paginate'=>$controller->paginate()
                                     ),
                   'listSections'=>$controller->getListSections()
                   )
             );
  
  $controller->view(ADMIN_TPLS_DIR.'/header.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/deletedpages.tpl');
  $controller->view(ADMIN_TPLS_DIR.'/footer.tpl');

    

?>