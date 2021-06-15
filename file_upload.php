<?php
echo  "<pre>";
print_r($_FILES);
foreach ($_FILES['photo']['name'] as $key => $photo ) {
    $name =$_FILES['photo']['name'][$key];
    
    $temName = $_FILES['photo']['tmp_name'][$key];
    $to="./store";
    move_uploaded_file($temName,$to."/".$name);

}

//ex.php ka hr

//<ul>
//    <?php foreach ($dir as $d) {?>
<!--    <li>-->
<!--        --><?php //echo $d ?>
<!--    </li>-->
<!--    --><?php //}?>
<!--</ul>-->