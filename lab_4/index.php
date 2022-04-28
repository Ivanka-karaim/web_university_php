<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .container{
            text-align: center;
            margin:auto;
        }

    </style>
</head>
<body>
<div class="container">
<h1>Синтаксис PHP</h1>
    <hr>
<p><?php echo "I love PHP!"?></p>
<p><?= "I love PHP!"?></p>
<p><?php print "I love PHP!"?></p>
    <hr>

<pre><?php
    $pi=3.141593;
    printf("Число Пі = %.2f\n", $pi);
    printf("Число Пі = %f\n", $pi);
    printf("Число Пі = %d\n", $pi);
    ?></pre>
    <hr>
<h2>Робота зі змінними</h2>
    <hr>
    <?php
    $type_product="Душові кабіни";
    $name_product="Звичайна кутова душова кабіна";
    $price=7000;
    $possibility_order=false;

    $two="one";
    $three="two";
    $four="three";
    ?>
<p>
<?php
echo "$name_product - $price грн";
?>
</p>
<p>
<?php
echo $name_product . " - ". $price. " грн";
?>
</p>
    <hr>
<p><?php echo $four; ?></p>
<!--    $three-->
<p><?php echo $$four; ?></p>
<!--    $$three  $two-->
<p><?php echo $$$four; ?></p>
    <hr>

<p><?= $price?></p>
<p><?= "Можливість замовити зараз: ".($possibility_order? "Є": "Немає") ?></p>
<p><?php
    define("price", "7000");
    echo price;
    ?>
</p>
    <hr>
<h2>Робота з масивами</h2>
    <hr>
    <?php
    $my_array_int=[1,2,3,4];
    $my_array_string=array("a"=>"apple", "b"=>"banana", "c"=>"citrus");
    $my_array_product=[["name_product"=>"Звичайна кутова душова кабіна", "description"=>"Ця душова кабіна чудово підходить для вашої ванної кімнати", "price"=>7000],
        ["name_product"=>"Одинарна душова перегородка", "description"=>"Ця душова перегородка чудово підходить для вашої ванної кімнати", "price"=>8000],
        ["name_product"=>"Душова кабіна з 2 дверками", "description"=>"Ця душова кабіна чудово підходить для вашої ванної кімнати", "price"=>9000]];

    ?>
    <pre><?php print_r($my_array_int)?></pre>
    <pre><?php var_dump($my_array_int)?></pre>
    <hr>
    <pre><?php print_r($my_array_string)?></pre>
    <pre><?php var_dump($my_array_string)?></pre>
    <hr>
<h2>Робота з циклами</h2>
    <hr>
<div>

    <?php
    for($i=0; $i<5; $i++): ?>
    <div >@</div>
    <?php endfor;?>
    <hr>

    <?php foreach ($my_array_product as $product): ?>
        <pre><?= $product['name_product'] . "\nОпис: " . $product['description']."\nЦіна:".$product['price']."\n"?></pre>
    <?php endforeach ?>
    <hr>

    <?php foreach ($my_array_string as $key => $value): ?>
        <?php if(strlen($value)<=5): ?>
            <p>
                <?= "$key - $value" ?>
            </p>
        <?php endif?>
    <?php endforeach?>
</div>
<hr>
<h2>Робота з строками</h2>
    <hr>
    <?php
    $my_string = "I,love,php";
    $words_arr = explode(",", $my_string);
    $php_arr = ["I", "love", "PHP"];
    $php_str = implode(" ", $php_arr);

    ?>
    <p><?= print_r($words_arr); ?></p>
    <p><?= $php_str?></p>
    <hr>
<h2>Написання та використання функцій</h2>
    <hr>
<?php
function amount_order($products){
    $i=0;
    foreach ($products as $product){
        $i += $product['price'];
    }
    return $i;
}
echo "Amount_order: ". amount_order($my_array_product);
?>
    <hr>
<h1>Використання ООП</h1>
    <hr>
    <?php
    include_once "classes/Order.php";
    include_once "classes/Product.php";
    include_once "classes/Shower.php";
    include_once "classes/Window.php";
    include_once "classes/Singleton.php";

    $product = new Product("Продукт","Гарний продукт", 5000);
    $shower1 = new Shower("Звичайна кутова душова кабіна", "Ця душова кабіна чудово підходить для вашої ванної кімнати", 7000, "Чорна, сіра");
    $shower2 = new Shower("Звичайна пряма душова кабіна", "Ця душова кабіна чудово підходить для вашої ванної кімнати", 8000, "Чорна, сіра, золота");
    $window1 = new Window("Вікно з двома дверками", "Це вікно підійде для людей, які люблять провітрювати свою оселю",4500, "Однокамерний");
    $window2 = new Window("Вікно з одними дверками", "Це вікно підійде для людей, які люблять провітрювати свою оселю",4000, "Однокамерний");
    $mas=array($shower1, $shower2, $window1);
    $order = new Order($mas);
    echo $order;
    echo "<br>";
    $order->add($window2);
    echo $order;
    ?>
    <hr>
    <?php
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    $s2->setMyData(200);
    if ($s1 === $s2) {
            echo "Singleton works";
        } else {
            echo "Singleton failed";
        }
    ?>
    <pre>
            S1: <?php  var_dump($s1) ?>
        </pre>

    <pre>
            S2: <?php var_dump($s2) ?>
        </pre>

</div>
</body>
</html>

