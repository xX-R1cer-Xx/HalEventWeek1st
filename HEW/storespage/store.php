<?php
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
    <div id="main1">
        <table id="customerlist">
            <tr>
                <td>注文番号</td>
                <td>お名前</td>
                <td>住所</td>
                <td>電話番号</td>
            </tr>
            <?php
            for ($i = 1; $i < count($customerlist); $i++) {
                echo ("<tr>");
                for ($j = 0; $j < 4; $j++) {
                    echo ("<td>" . $customerlist[$i][$j] . "</td>");
                }
                echo ("</tr>");
            }
            ?>
        </table>
    </div>
</body>

</html>