<?php

if(count($errors)> 0){
    ?>
   
    <div class="ms"></div>
    <?php foreach($errors as $error) :?>
        <li><?php echo $error?></li>
        <?php endforeach?>   
<?php
}
?>