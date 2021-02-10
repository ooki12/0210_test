<?php
    $object = 1;

    if(isset($_POST['o'])){
        $object = $_POST['o'];
    }
    if(isset($_POST['one'])){
        $object++;
    }
    if(isset($_POST['two'])){
        $object++;
        $object++;
    }
    if(isset($_POST['three'])){
        $object++;
        $object++;
        $object++;
    }
 ?>

 <form action="" method="POST">
     <input type="hidden" name="o" value="<?=$object?>">
     <input type="submit" name="one" value="one">
     <input type="submit" name="two" value="two">
     <input type="submit" name="three" value="three">
 </form>
 <?=$object?>