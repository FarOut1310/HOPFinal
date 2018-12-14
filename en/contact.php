<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to A-Senz</title>
    <link rel="stylesheet" href="../less/style.css">
</head>
<body class=senzBody>
    
    <?php include '../include/header_en.php';?>
    
    <main class="contactMain">
        <div class="contactMain__login">
            <form action="login.php" method="post" class="contactMain__login--form">
                <label for="username" class="contactMain__login--label">Username: </label><br>
                <input type="text" name="username" class="contactMain__login--input"><br>
                <label for="password" class="contactMain__login--label">Password: </label><br>
                <input type="password" name="password" class="contactMain__login--input"><br>
                <input type="submit" value="Login" class="contactMain__login--submit">
            </form>
        </div>
        <section class="contactMain__text">
            <h2 class="contactMain__text--h2">A-Senz</h2>
            <p class="contactMain__text--p">Padborgvej 188<br>
            8600 Silkeborg<br>
            Denmark<br>
            Tel: +4529641888<br>
            E-mail: <a href="mailto:info@a-senz.dk" class="contactMain__text--a">info@a-senz.dk</a>
            </p>
        </section>
            <div class="contactMain__formBox">
                <h3 class="contactMain__formBox--h3">You can fill out the formula below to send us a message. We'll get back to you as soon as possible.</h3>
                <form action="send.php" method="post" class="contactMain__form">
                    <label for="name" class="contactMain__form--label">Name: </label>
                    <input type="text" name="name" class="contactMain__form--input"><br>
                    <label for="email" class="contactMain__form--label">E-mail address: </label>
                    <input type="text" name="email" class="contactMain__form--input"><br>
                    <label for="phonenr" class="contactMain__form--label">Telephone number: </label>
                    <input type="number" name="phonenr" class="contactMain__form--input"><br>
                    <label for="message" class="contactMain__form--label">Write us a message: </label><br>
                    <textarea name="message" cols="50" rows="10" class="contactMain__form--textarea"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Send" class="contactMain__form--submit">
                </form>
            </div>
    </main>

    <?php include '../include/footer_en.php';?>
</body>
</html>