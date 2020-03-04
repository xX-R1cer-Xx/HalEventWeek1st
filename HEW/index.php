<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>戦国屋</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="js/slick-1.8.1/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick-1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/slick-1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <header>
        <h1><a href="#"><img src="images/logo.png" class="logo" alt="戦国屋"></a></h1>
        <nav>
            <ul>
                <li><a href="#page2">メニュー</a></li>
                <li><a href="pages/order.php">注文</a></li>
                <li><a href="#page3">配達状況</a></li>
                <li><a href="#page4">アクセス</a></li>　
            </ul>
        </nav>
    </header>
    <div id="page1">
        <ul class="slider">
            <li><img src="images/original.jpg" alt="image01"></li>
            <li><img src="images/okonomi2.jpg" alt="image01"></li>
            <li><a href="#"><img src="images/takoyaki.jpg" alt="image02"></a></li>
        </ul>
    </div>

    <div id="page2">
        <div class="foods">
            <div class="foodpic"><img src="images/takoyaki.jpg" alt="image01"></div>
            <div class="foodtitle">
                <p>たこ焼き</p>
            </div>
            <div class="foodtext">
                <p>当店自慢のたこ焼きです(6個入り)<br>ソース味、マヨネーズ味</p>
            </div>
            <!-- <div class="foodprice">
                <p>300円</p>
            </div> -->
        </div>

        <div class="foods">
            <div class="foodpic"><img src="images/okonomi.jpg" alt="image01"></div>
            <div class="foodtitle">
                <p>戦国焼き</p>
            </div>
            <div class="foodtext">
                <p>当店の隠し味と<br>山芋の入った好み焼きの定番<br></p>
            </div>
            <!-- <div class="foodprice">
                <p>250円</p>
            </div> -->
        </div>

        <div class="foods">
            <div class="foodpic"><img src="images/beer.jpg" alt="image01"></div>
            <div class="foodtitle">
                <p>イカ焼き</p>
            </div>
            <div class="foodtext">
                <p>アサヒスーパードライ<br>さらりとした飲み口</p>
            </div>
            <!-- <div class="foodprice">
                <p>480円</p>
            </div> -->
        </div>

        <div class="foods">
            <div class="foodpic"><img src="images/beer.jpg" alt="image01"></div>
            <div class="foodtitle">
                <p>ビール</p>
            </div>
            <div class="foodtext">
                <p>アサヒスーパードライ<br>さらりとした飲み口</p>
            </div>
            <!-- <div class="foodprice">
                <p>480円</p>
            </div> -->
        </div>


        <div id="page3">
            <div id="order">
                <div id="deliverimg">
                    <p><img src="images/deliver.jpg" alt="image01"></p>
                </div>
                <div id="deliverbutton">
                    <form action="pages/progress.php" method="post">
                        <p>
                            こちらで配送状況を確認できます！
                        </p>

                        <p>
                            <input class="orderform" type="text" name="ordercode" value="注文番号:0000">
                            <input class="orderform1" type="submit" value="確認">
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div id="page4">
            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d460.614236432496!2d135.60945932249606!3d34.72599810528888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60011fd03e7f5df3%3A0x49ca69a061351309!2z5oim5Zu95bGLMTU5OA!5e0!3m2!1sja!2sjp!4v1583148164479!5m2!1sja!2sjp"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        </div>

        <script type="text/javascript" src="js/index.js"></script>

</body>

</html>