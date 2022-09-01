<?php include __DIR__. '../includes/data/data.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima Versione</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="card-container" >
            <?php foreach($discs as $disc) { ?>

                <div class="card">
                    <?php echo $disc['title'] ?>
                    <?php echo $disc['author'] ?>
                    <?php echo $disc['year'] ?>
                <img src="<?php echo $disc['poster'] ?>" alt="">
                    <?php echo $disc['genre'] ?>
                </div>

            <?php }?>
        </div>

    </div>
    
    
</body>
</html>

