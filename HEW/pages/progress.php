<?php
$ordercode = $_POST['ordercode'];
$flg;
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

for ($i = 0; $i < count($customerlist); $i++) {

    if ($_POST['ordercode'] == $customerlist[$i][0]) {
        $flg = true;
        break;
    } elseif ($_POST['ordercode'] == 0) {
        $msg = "値が不正です";
    } else {
        $msg = "値が不正です";
    }
}

if ($flg) {
    if ($customerlist[$i][4] == 0) {
        $msg = "ただいま準備中です";
    } else if ($customerlist[$i][4] == 1) {
        $msg = "ただいま調理中です";
    } else if ($customerlist[$i][4] == 2) {
        $msg = "ただいま配達中です";
    } else if ($customerlist[$i][4] == 3) {
        $msg = "配達完了いたしました！";
    }
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
    <h1>進捗状況</h1>
    <div id="main1">
        <p>注文番号[<?php echo $ordercode; ?>]は<span><?php echo $msg; ?></span></p>
    </div>
</body>

</html>