<?php
    class DeletedpagesModel extends BaseModel{
        public function __construct(){
            parent::__construct();
        }
        
        public function deletePage($pid){
            $sql = "update pages set display=3 where pid=".(int)$pid;
            $result = $this->updateData($sql);
            
            return $result;
        }
        
        public function killPage($pid){
            $sql = "delete from pages where pid=".(int)$pid;
            $result = $this->deleteData($sql);
            
            return $result;
        }

        public function recoveryPage($pid){
            $sql = "update pages set display=0 where pid=".(int)$pid;
            $result = $this->updateData($sql);
            
            return $result;
        }                   
    }
?>