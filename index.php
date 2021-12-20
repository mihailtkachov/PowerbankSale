<?php 
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powerbanks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Обзоры</a></li>
            <li><a href="#">Отзывы</a></li>
        </nav>
        <h1>Powerbank</h1>
        <nav> 
            <?php 
                if(isset($_SESSION['login'])){ 
                    echo '<a href="/logout.php">Привет, ' . $_SESSION['login'] . '</a>';
                } 
                else echo '<li><a href="/login.php">Войти</a></li>';
            ?>
            <li><a href="#">Корзина</a></li>
        </nav>
    </header>

    <section id="description_block">
        <div id="description_block_text">
            <h2>Запас энергии всегда под рукой!</h2>
            <ul>
                <li type="square">гарантия качества</li>
                <li type="square">широкий выбор</li>
                <li type="square">оптовые скидки</li>
                <li type="square">гибкие условия оплаты и доставки</li>
            </ul>
        </div>
        <img src="https://alfabox.com.ua/image/catalog/powerbankbaseusstarlight/bazeus-27.jpg" alt="Павербанк:)">
    </section>

    <main>
        <section id="items">
                <?php 

                    $array = array(1, 2, 3);
                    $count = count($array);
                    for ($i = 0; $i < $count; $i++)
                    {
                        echo '<div class="item"><img src="https://images.ua.prom.st/2606201853_poverbank-power-bank.jpg" alt="Павербанк"><span>'.$array[$i].'</span><a href="#"><button>Купить</button></a></div>';
                    }
                ?>
        </section>
    </main>
    <footer>
        <h3>Харьков 2021</h3>
    </footer>
</body>
</html>