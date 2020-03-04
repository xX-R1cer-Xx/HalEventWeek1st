<?php
$customerlist = array();
$flg;

// ここから顧客情報登録
$customerinfo = array(null, $_POST["name"], $_POST["adress"],$_POST["phone"],0);

if (($handle = fopen("../data/customer.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle))) {
        $j = 0;
        foreach ($data as $value) {
            $customerlist[$i][$j] = $value;
            $j++;
        }
        $i++;
    }
    fclose($handle);
}

$rand = rand(1, 9999);
for($i = 0;$i < count($customerlist);$i++){
    if($idlist[$i][0] == $rand){
        $i = 0;
        $rand = rand(1, 9999);
    }else{
        $customerinfo[0] = $rand;
        $flg = true;
    }

    if($i == 10000){
        echo "エラーです管理者にお問い合わせください";
    break;
    }
}

array_push($customerlist,$customerinfo);

if($flg){
$fp = fopen('../data/customer.csv', 'w');

foreach ($customerlist as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
}
$customerlist = array();
// 顧客情報登録ここまで


// 注文情報登録
$orderinfo = array($rand, $_POST["takoyaki"], $_POST["sengoku"],$_POST["ikayaki"],$_POST["drink"]);

if (($handle = fopen("../data/order.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle))) {
        $j = 0;
        foreach ($data as $value) {
            $orderlist[$i][$j] = $value;
            $j++;
        }
        $i++;
    }
    fclose($handle);
}

array_push($orderlist,$orderinfo);

if($flg){
$fp = fopen('../data/order.csv', 'w');

foreach ($orderlist as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>戦国屋</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/confirm.css">
</head>

<body>
    <h1>注文完了！</h1>
    <div id="main1">
        <p>注文が完了しました！あなたの配達番号は<span>[<?php echo $rand; ?>]</span>です</p>
        <p><a href="../index.php">トップページへ</a></p>
    </div>
</body>

</html>