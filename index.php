<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <title>POS System</title>
</head>

<body>
    <div class="navbar">
        <h6>POS System</h6>
    </div>
    <div class="container">
        <div class="left">


            <p>Products list : </p>
            <hr>
            <?php

            if (isset($_POST['product'])) {
                $product = $_POST['product'];


                $total = 0;
            ?>



            <?php




                // 999999999



                for ($i = 0; $i < count($product); $i++) {
                    echo $product[$i] . '<br>';
                    echo "<hr>";
                }

                $price = array("apple" => 5, "banana" => 3, "milk" => 6, "lamb" => 10, "orange" => 3, "eggs" => 6, "cheese" => 7, "butter" => 4, "juice" => 5, "water" => 1, "bread" => 3, "oil" => 10, "meat" => 15, "chicken" => 12, "fish" => 14, "honey" => 9, "soap" => 6, "shampoo" => 12, "toothpaste" => 6, "tomato" => 3, "t-shirts" => 6, "pants" => 5, "socks" => 3, "potato" => 2, "chips" => 3, "soft-drinks" => 3, "beans" => 2, "onion" => 2);
                for ($j = 0; $j < count($product); $j++) {
                    echo $price[$product[$j]] . "<br>";
                    echo "<hr>";
                    $total += $price[$product[$j]];
                }

                echo "Total  is : " . $total . "$";
                echo "<br>";
                $taxes = ($total * (6 / 100));
                echo "Tax : " . $taxes . "$";
                echo "<br>";
                echo "Discount : 5%";
                $total = $total - ($total * (5 / 100));
                echo "<hr>" . "<br>" . "Total after GTS and Discount :" .  $taxes + $total . "$";
            }

            ?>
        </div>
        <div class="right">
            <form action="" method="POST">
                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="apple"><label for="">apple: $5 <br> we have a variety of fresh delecious apples in all colors </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="banana"><label for="">banana: $3<br> our bananas are hand picked and ready to be savored</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="milk"><label for="">milk: $6 <br> our milk is freshly squized by grass fed cows </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="lamb"><label for="">lamb: $10 <br>fresh lamb meat</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="orange"><label for="">orange: $3 <br> freshly picked oranges</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="eggs"><label for="">eggs: $6 <br> daily fresh eggs from our farms</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="cheese"><label for="">cheese: $7 <br> best-quality cheese</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="butter"><label for="">butter: $4 <br> high quality butter at reasonable price</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="juice"><label for="">juice: $5 <br> we have a variety of different juices </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="water"><label for="">water: $1 <br> miniral water </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="bread"><label for="">bread: $3 <br> frshly baked bread</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="oil"><label for="">oil: $10 <br> cooking oil</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="meat"><label for="">meat: $15 <br>fresh meat from grass fed cows</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="chicken"><label for="">chicken: $12 <br> chicken at reasonable prices </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="fish"><label for="">fish: $14 <br> variety ocean fishes</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="honey"><label for="">honey: $9 <br> farm grown bee farm honey </label></div>

                </div>

                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="soap"><label for="">soap: $6 <br> all fragrances of soap are available </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="shampoo"><label for="">shampoo: $12 <br> different types of shampoos available </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="toothpaste"><label for="">toothpate: $6<br> we have a variety toothpaste </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="tomato"><label for="">tomato: $3<br> red freshly hand picked tomatos </label></div>


                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="t-shirts"><label for="">t-shirts: $6<br>100% cotton t-shirts</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="pants"><label for="">pants: $5<br>all sizes and different color pants</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="socks"><label for="">socks: $3<br>100% cotton socks</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="potato"><label for="">potato: $2<br>fresh irish potato</label></div>

                </div>

                <div class="row">
                    <div class="column"><input type="checkbox" name="product[]" value="chips"><label for="">chips: $3<br>different snacks </label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="soft-drinks"><label for="">soft-drinks: $3<br> pepsi coke and many more</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="beans"><label for="">beans: $2<br> red and black beans</label></div>
                    <div class="column"><input type="checkbox" name="product[]" value="onion"><label for="">onion: $2<br> white and red onions at reasonable prices</label></div>

                </div>




                <div id="form">
                    <input type="submit" value="Submit" class="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>All Right Reserved</p>
        <ul>
            <li>GROUP 1</li>
            <br>
            <li>Abdelhadi Hadj Sahraoui</li>
            <li>Elgaafarawy Tawfek</li>
            <li>Alsharif Mohammad</li>
            <li>Shariful Islam</li>
            <li>Saad Alderra</li>
        </ul>
    </div>
</body>

</html>