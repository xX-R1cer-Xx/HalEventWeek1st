<?php
$code = $_POST['customercode'];
$flg = false;
$cnt = 0;
$msg;

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
$i = 0;
$j = 0;
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

while ($cnt < count($customerlist)) {
    if ($_POST['customercode'] == $customerlist[$cnt][0]) {
        $flg = true;
        break;
    }
    $cnt++;
}

if($flg == true){
if ($customerlist[$cnt][4] < 3) {
    $customerlist[$cnt][4] = $customerlist[$cnt][4] + 1;
}

if ($customerlist[$cnt][4] == 0) {
    $msg = "ステータス:準備";
} else if ($customerlist[$cnt][4] == 1) {
    $msg = "ステータス:調理中";
} else if ($customerlist[$cnt][4] == 2) {
    $msg = "ステータス:配達中";
} else if ($customerlist[$cnt][4] == 3) {
    $msg = "ステータス:完了";
}

$fp = fopen('../data/customer.csv', 'w');

foreach ($customerlist as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
}else{
    $msg = "値が不正です";
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>戦国屋</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/store.css">
</head>

<body>
    <h1>注文一覧</h1>
    <p>注文番号<?php echo $_POST['customercode'] ?></p>
    <div id="main1">
        <table id="customerlist">
            <tr>
                <td>名前</td>
                <td>住所</td>
                <td>電話番号</td>
            </tr>

            <tr>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<td>" . $customerlist[$cnt][$i + 1] . "</td>";
                }

                ?>
            </tr>
        </table>

        <table id="customerlist">
            <tr>
                <td>たこ焼き</td>
                <td>戦国焼き</td>
                <td>イカ焼き</td>
                <td>ドリンク</td>
            </tr>

            <tr>
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo "<td>" . $orderlist[$cnt][$i + 1] . "</td>";
                }
                ?>
            </tr>
        </table>
        <?php echo $msg; ?>
        <form action="" method="POST">
            <p><input type="text" name="customercode" value="<?php echo $code; ?>"><input type="submit" value="次の工程へ"></p>
        </form>
        <p><a href="store.php">戻る</a></p>
    </div>
</body>

</html>