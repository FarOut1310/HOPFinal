<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../less/style.css">
    <title>Products</title>
</head>
<body class="senzBody">
    <?php include '../include/header_en.php';?>

    <main class="productsMain">
        <h2 class="productsMain__h2">Here you can see the products that A-senz can offer you. <br>
        Click on a product category to learn more.</h2>
        <div class="productsContainer">
            <div class="productsContainer__box">
                <button class="productBox__btn" id="bedL">Bed-linens</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Cotton</li>
                        <li class="productBox__content--li">Ecolological materials</li>
                        <li class="productBox__content--li">GOTS materials</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="kitchen">Kitchen</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Dishcloths</li>
                        <li class="productBox__content--li">Kitchen textiles</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="towels">Towels</button>
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
                <button class="productBox__btn" id="bathroom">Bathroom</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Shower mats</li>
                        <li class="productBox__content--li">Shower curtains, with rotation or fixed print</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="pillow">Pillows</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Woven</li>
                        <li class="productBox__content--li">Print</li>
                        <li class="productBox__content--li">Photo print</li>
                        <li class="productBox__content--li">Cotton</li>
                        <li class="productBox__content--li">Polyester</li>
                        <li class="productBox__content--li">Velour</li>
                        <li class="productBox__content--li">Flannel</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="tbcloth">Tablecloths</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Acrylic</li>
                        <li class="productBox__content--li">Stainless</li>
                        <li class="productBox__content--li">Anti-slippery</li>
                        <li class="productBox__content--li">Damask</li>
                        <li class="productBox__content--li">Print</li>
                        <li class="productBox__content--li">Wax cloth</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="beanbag">Beanbags</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Cotton</li>
                        <li class="productBox__content--li">Nylon</li>
                        <li class="productBox__content--li">Print</li>
                        <li class="productBox__content--li">Photo print</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="totebag">Totebags</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Non woven bags</li>
                        <li class="productBox__content--li">Laminated, non woven sacks and bags</li>
                        <li class="productBox__content--li">Paper bags</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="fleece">Fleece</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Fleece carpets</li>
                        <li class="productBox__content--li">Picnic blankets</li>
                    </ul>
                </section>
            </div>
            <div class="productsContainer__box">
                <button class="productBox__btn" id="felt">Felt</button>
                <section class="productBox__content">
                    <ul class="productBox__content--ul">
                        <li class="productBox__content--li">Table napkins</li>
                        <li class="productBox__content--li">Christmas decorations</li>
                        <li class="productBox__content--li">Baskets</li>
                        <li class="productBox__content--li">Seasonal bags</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    
    <?php include '../include/footer_en.php';?>
    <script src="../js/productsCollapse.js"></script>
</body>
</html>