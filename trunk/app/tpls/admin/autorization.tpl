<?=$formAutorize['begin'];?>


  <div class="modal-dialog" style="width:500px;margin-top:10%;">
    <div class="modal-content">

      <div class="modal-header modal-header-wf" style="background-color:#428BCA;color:white;border-radius:5px 5px 0px 0px">
       <h4>Доступ к закрытому разделу сайта</h4>
      </div>
    <div class="modal-body">
        
        <?php if(isset($errors) && !empty($errors)) :?>
        
         <div class="alert alert-danger fade in"> 
         <ul class="text-danger">
         
         <?php foreach($errors as $error):?>
        
        <li><?=$error?></li>
        
        
         <?php endforeach;?>
         
         </ul>
         </div>
        <?php endif;?>
        
        <div class="form-group">
         <label for="login">Логин</label>
         <?=$formAutorize['login'];?>
        </div>    
        <div class="form-group">
         <label for="password">Пароль</label>
         <?=$formAutorize['password'];?>
        </div>    
   </div> 

   <div class="modal-footer">
    <?=$formAutorize['enter'];?>
   </div>
  </div>

 
<?=$formAutorize['end'];?>
