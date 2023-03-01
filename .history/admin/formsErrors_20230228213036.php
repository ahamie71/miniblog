<?php

if(count($errors)> 0){
    ?>
   
    <div class="msg error"></div>
    <?php foreach($errors as $error) :?>
        <li><?php echo $error?></li>
        <?php endforeach?>   
<?php
}
?>