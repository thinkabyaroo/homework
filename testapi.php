<?php
$data = file_get_contents("https://fakestoreapi.com/products");
$dataArr =json_decode($data);
//print_r($dataArr);
foreach ($dataArr as $d){
    ?>

    <div class="">
        <h4>
            <?php echo $d->title; ?>
        </h4>
        <p>
            <?php echo $d->description; ?>
        </p>
    </div>
<?php
}