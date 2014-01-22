<?php
   class RulesUrl{
      static $dataRules = array();
      
      static function addRules($route,$rules){
         self::$dataRules = $rules;
      }
      
      static function getRules(){
         return self::$dataRules;
      }
      
      static function setRules($mode){
           $get = explode("/",mb_substr($_SERVER['REQUEST_URI'],1));
           echo '<pre>' . print_r($get, 1) . '</pre>';
           foreach($get as $k=>$v){
             if($k == 0)
                $_GET['mode'] =  $v;
             elseif($k == 1)
                $_GET['route'] = $v;  
             else{
                
             }  
             
             var_dump(self::$dataRules[$_GET['route']]);  
             //echo $v.'<br/>';
             //if(!is_array(self::$dataRules[$mode])){
                //$_GET[$v] = self::$dataRules[$mode][$k];
                //echo '<pre>' . print_r(self::$dataRules[$mode], 1) . '</pre>';
             
             //}
           }
           
          //echo '<pre>' . print_r($_GET, 1) . '</pre>';
      }
      
   }
?>