<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="less/style.css">
    <title>Document</title>
</head>
<body class="senzBody">
    <?php
        include('classes/asenzdb.php');
        $asenzdb = new asenzDB;
        $asenzdb->connectDb();

        $mysql = "INSERT INTO contactformula (
            name,
            email,
            phonenr,
            message
        )
        VALUES (?,?,?,?)";

        $info = array(
            $_POST['name'],
            $_POST['email'],
            $_POST['phonenr'],
            $_POST['message']
        );

        $asenzdb->prepstmt($mysql, $info);
    ?>
    <?php include 'include/header.php';?>
    
    <main class="sendMain">
        <article class="sendMain__article">
            <h3 class="sendMain__article--h3">Thank you for contacting us!</h3>
            <p class="sendMain__text--p">You message has been received.<br>
            Thank you for writing to us. We will be in contact with you soon.</p>
        </article>
    </main>

    <?php include 'include/footer.php';?>

</body>
</html>