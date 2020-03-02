<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>戦国屋</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/order.css">
</head>

<body>
    <form action="confirm.php" method="post">

        <div id="page1">
            <p id="logo"><img src="../images/logo.png" class="logo" alt="戦国屋"></p>
            <p class="title">注文受付フォーム
            </p>

            <div id="menu">
                <div class="foods">
                    <div class="foodpic"><img src="../images/takoyaki.jpg" alt="image01"></div>
                    <div class="foodtitle">
                        <p>たこ焼き</p>
                    </div>
                    <div class="foodtext">
                        <p>当店自慢のたこ焼きです(6個入り)<br>ソース味、マヨネーズ味</p>
                    </div>
                    <div class="foodprice">
                        <p>300円</p>
                    </div>
                    <p>
                        数量：<select name="takoyaki">
                            <?php
                            for ($i = 0; $i <= 100; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                </div>

                <div class="foods">
                    <div class="foodpic"><img src="../images/okonomi.jpg" alt="image01"></div>
                    <div class="foodtitle">
                        <p>戦国焼き</p>
                    </div>
                    <div class="foodtext">
                        <p>当店の隠し味と<br>山芋の入った好み焼きの定番<br></p>
                    </div>
                    <div class="foodprice">
                        <p>250円</p>
                    </div>
                    <p>
                        数量：<select name="sengoku">
                            <?php
                            for ($i = 0; $i <= 100; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                </div>

                <div class="foods">
                    <div class="foodpic"><img src="../images/beer.jpg" alt="image01"></div>
                    <div class="foodtitle">
                        <p>イカ焼き</p>
                    </div>
                    <div class="foodtext">
                        <p>アサヒスーパードライ<br>さらりとした飲み口</p>
                    </div>
                    <div class="foodprice">
                        <p>480円</p>
                    </div>
                    <p>
                        数量：<select name="ikayaki">
                            <?php
                            for ($i = 0; $i <= 100; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                </div>

                <div class="foods">
                    <div class="foodpic"><img src="../images/beer.jpg" alt="image01"></div>
                    <div class="foodtitle">
                        <p>ビール</p>
                    </div>
                    <div class="foodtext">
                        <p>アサヒスーパードライ<br>さらりとした飲み口</p>
                    </div>
                    <div class="foodprice">
                        <p>480円</p>
                    </div>
                    <p>
                        数量：<select name="beer">
                            <?php
                            for ($i = 0; $i <= 100; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                </div>
            </div>
        </div>

        <div id="page2">
            <p class="title">お届け先</p>

            <div id="profile">
            名前：<input type="text" name="name" size="40">
            住所：<input type="text" name="adress" size="40">
            電話番号：<input type="text" name="phone" size="40">
            </div>
        </div>

        <p>
            <input type="submit" value="送信">
        </p>
    </form>
    </form>
</body>

</html>

<!-- 
使用する変数
たこ焼き＝takoyaki
戦国焼き=sengoku
イカ焼き=ikayaki
ビール＝beer 

名前＝name
住所=adress
電話番号＝phone
-->