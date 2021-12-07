<?php
    $amount = 0;
    $sum = 0;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주문서</title>
    <style>
        * {
            font-family: -apple-system;
        }
        .center {
            text-align: center;
            
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0.3rem;
            font-size: 1.2rem;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>주문서</h1>
        <table>
            <thead>
                <th>품명</th>
                <th>수량</th>
                <th>가격</th>
            </thead>
            <tbody>
                <?php
                if (array_key_exists("ame", $_POST)) {
                    $extra = 0;
                    if ($_POST["ame_size"] == "스몰") {
                        $extra = -500;
                    } else if ($_POST["ame_size"] == "라지") {
                        $extra = 500;
                    } else {
                        $extra = 0;
                    }
                    $price = (1500 + $extra) * $_POST["ame_amount"];

                    echo "<tr><td>아메리카노 " . $_POST["ame_size"] . "</td>";
                    echo "<td>" . $_POST["ame_amount"] . "잔</td>";
                    echo "<td>" . number_format($price) . "원</td></tr>";

                    $amount += $_POST["ame_amount"];
                    $sum += $price;
                }
                if (array_key_exists("lat", $_POST)) {
                    if ($_POST["lat_size"] == "스몰") {
                        $extra = -500;
                    } else if ($_POST["lat_size"] == "라지") {
                        $extra = 500;
                    } else {
                        $extra = 0;
                    }
                    $price = (2000 + $extra) * $_POST["lat_amount"];

                    echo "<tr><td>라떼 " . $_POST["lat_size"] . "</td>";
                    echo "<td>" . $_POST["lat_amount"] . "잔</td>";
                    echo "<td>" . number_format($price) . "원</td></tr>";
                    
                    $amount += $_POST["lat_amount"];
                    $sum += $price;
                }
                if (array_key_exists("ice", $_POST)) {
                    if ($_POST["ice_size"] == "스몰") {
                        $extra = -500;
                    } else if ($_POST["ice_size"] == "라지") {
                        $extra = 500;
                    } else {
                        $extra = 0;
                    }
                    $price = (2000 + $extra) * $_POST["ice_amount"];

                    echo "<tr><td>아이스티 " . $_POST["ice_size"] . "</td>";
                    echo "<td>" . $_POST["ice_amount"] . "잔</td>";
                    echo "<td>" . number_format($price) . "원</td></tr>";
                    
                    $amount += $_POST["ice_amount"];
                    $sum += $price;
                }
                if (array_key_exists("cho", $_POST)) {
                    if ($_POST["cho_size"] == "스몰") {
                        $extra = -500;
                    } else if ($_POST["cho_size"] == "라") {
                        $extra = 500;
                    } else {
                        $extra = 0;
                    }
                    $price = (2500 + $extra) * $_POST["cho_amount"];

                    echo "<tr><td>초코라떼 " . $_POST["cho_size"] . "</td>";
                    echo "<td>" . $_POST["cho_amount"] . "잔</td>";
                    echo "<td>" . number_format($price) . "원</td></tr>";
                    
                    $amount += $_POST["cho_amount"];
                    $sum += $price;
                }
                ?>
                <tr>
                    <td>총</td>
                    <td><?= $amount ?>잔</td>
                    <td><?= number_format($sum) ?>원</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>