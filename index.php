<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
        img{
            width: 150px;
        }
    </style>
</head>
<body>
	<form action="ex.php" method="post" enctype="multipart/form-data">
		<input type="file" name="photo[]" multiple>
        <button>Upload</button>
	</form>
//file
    <?php
    $dir = scandir("store");
    foreach ($dir as $d ){
        if($d ==="." || $d ==='..'){
            continue;
        }

    ?>
	<img src="<?php echo 'store/'.$d; ?> ">
    <?php
    }
    ?>
	<!-- <form action="exchange.php" method="post">
		<input type="number" name="myDollar">
	<button>Calculate</button>
	</form> -->
</body>
</html>
