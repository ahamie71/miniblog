<?php

if(count($errors)> 0){
    ?>
   
    <div class=""></div>
    <?php foreach($errors as $) :?>
        <li><?php echo $err?></li>

        <?php endforeach?>   
<?php
}
?>