<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="less/style.css">
    <title>Products</title>
</head>
<body class="senzBody">
    <?php include 'include/header.php';?>

    <main class="productsMain">
        <h2 class="productsMain__h2">Her kan du se det portfølje af produkter som vi har at vælge imellem hos A-senz. <br>
        Klik på en kategori for at se mere.</h2>
        <div class="productsContainer">
            <div class="productsContainer__box">
                <button class="productBox__btn" id="bedL">Sengelinned</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Bomuld</li>
                        <li class="productBox__content--li">Økologisk</li>
                        <li class="productBox__content--li">GOTS produkter</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="kitchen">Køkken</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Viskestykker</li>
                        <li class="productBox__content--li">Køkkentekstiler</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="towels">Håndklæder</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Plain</li>
                        <li class="productBox__content--li">Jacquard</li>
                        <li class="productBox__content--li">Print</li>
                        <li class="productBox__content--li">Dobby</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="bathroom">Bad</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Bademåtter</li>
                        <li class="productBox__content--li">Bruseforhæng med rotation og placeret print</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="pillow">Puder</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Vævet</li>
                        <li class="productBox__content--li">Printet</li>
                        <li class="productBox__content--li">Fotoprint</li>
                        <li class="productBox__content--li">Bomuld</li>
                        <li class="productBox__content--li">Polyester</li>
                        <li class="productBox__content--li">Velour</li>
                        <li class="productBox__content--li">Fløjl og mm</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="tbcloth">Duge</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Akryl</li>
                        <li class="productBox__content--li">Pletfri</li>
                        <li class="productBox__content--li">Antislip</li>
                        <li class="productBox__content--li">Damask</li>
                        <li class="productBox__content--li">Printet</li>
                        <li class="productBox__content--li">Voksduge</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="beanbag">Sækkestole</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Bomuld</li>
                        <li class="productBox__content--li">Nylon</li>
                        <li class="productBox__content--li">Printet</li>
                        <li class="productBox__content--li">Fotoprint</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="totebag">Muleposer</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Non-woven poser</li>
                        <li class="productBox__content--li">Lamineret non-woven poser og tasker</li>
                        <li class="productBox__content--li">Papir poser</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="fleece">Fleece</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Fleecetæpper</li>
                        <li class="productBox__content--li">Picnic tæpper</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="felt">Filt</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Dækkeservietter</li>
                        <li class="productBox__content--li">Jule dekorationer</li>
                        <li class="productBox__content--li">Kurve</li>
                        <li class="productBox__content--li">Sæsontasker</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    
    <?php include 'include/footer.php';?>
    <script src="js/productsCollapse.js"></script>
</body>
</html>