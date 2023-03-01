<?php

if(count($errors)> 0){
    ?>
   
    <div class=""></div>
    <?php foreach($errors as $error) :?>
        <li><?php echo $error?></li>
        <?php endforeach?>   
<?php
}
?>