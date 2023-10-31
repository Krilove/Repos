<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Contacts</title>
</head>
<body>
    <div class="wrapper">
    <?php require_once("../pages/header.php") ?>
        <div class="contacts">
            <div class="container">
                <h1 class = "contacts__title">Контакты</h1>
                <div class="contacts__block">
                    <div class="contacts__item">
                        <ul class="contacts__item-item">
                            <li class="contacts__item-links">Номер для связи - +78005553535</li>
                            <li class="contacts__item-links">Номер для заказа услуг - +79035313531</li>
                            <li class="contacts__item-links">Номер для еще чего-то - +78005553535</li>
                        </ul>
                        <img src="../map.png" alt="" class="contacts__img">
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("../pages/footer.php") ?>
    </div>
</body>
</html>