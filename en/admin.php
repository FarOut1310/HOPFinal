<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../less/style.css">
    <title>A-senz Admin</title>
</head>
<body class="senzBody">

    <?php include '../include/header_en.php';?>

    <?php
        include('../classes/asenzdb.php');
        $asenzdb = new asenzDB;
        $asenzdb->connectDb();

        $requests = $asenzdb->select('SELECT * FROM contactformula');
        ?>
        <main class="adminMain">
            <h2 class="adminMain__h2">Received messages:</h2>
            <div class="adminContainer">
        <?php foreach ($requests as $request) {
        ?>
            <div class="adminContainer__box">            
                <section class="adminMain__section">
                    <h3 class="adminMain__section--h3"><?php echo $request['name'];?></h3>
                    <a class="adminMain__section--a" href="mailto:<?php echo $request['email'];?>">Email: <?php echo $request['email'];?></a>
                    <p class="adminMain__section--p">Telephone: <?php echo $request['phonenr'];?></p>
                    <article class="adminMain__section--article"><?php echo $request['message'];?></article>
                </section>
            </div>               
        <?php
        }
        ?>
            </div>
        </main>
    <?php include '../include/footer_en.php';?>
</body>
</html>