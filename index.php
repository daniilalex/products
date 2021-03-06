<?php
include_once 'config.php';
?>

<hr>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse!</title>
</head>
<body>
<style><?php include 'C:\xampp\htdocs\codeacademy\products\style.css' ?>
</style>
<!--menu-->
<header>
    <table>
        <tr>
            <?php if (isLoged() === false) { ?>
                <td>
                    <a href="index.php">Markets</a>
                </td>
                <td>
                    <a href="index.php?page=login">Login</a>
                </td>
                <td>
                    <a href="index.php?page=register">Register</a>
                </td>
                <td>
                    <a href="index.php?page=markets_statistics">Markets Statistics</a>
                </td>
            <?php } else {
                if (getRole($mysql) === 'sandelininkas') { ?>
                    <td>
                        <a href="index.php?page=warehouse_products">Warehouse products</a><br>
                    </td>
                    <td>
                        <a href="index.php?page=products">Products</a>
                    </td>
                <?php }
                if (getRole($mysql) === 'vadybininkas') { ?>
                    <td>
                        <a href="index.php?page=warehouse_products">Warehouse products</a><br>
                    </td>
                    <td>
                        <a href="index.php?page=to_market">Order to market</a>
                    </td>
                <?php } ?>
                <td>
                    <a href="index.php?page=logout">Log out</a>
                </td>

            <?php } ?>


        </tr>
    </table>
</header>
<div class="main">
    <?php
    if ($page === null) {
        include 'pages/parduotuves.php';
    } else if ($page === 'register') {
        include 'pages/registration.php';
    } else if ($page === 'login') {
        include 'pages/login.php';
    } else if ($page === 'logout') {
        include 'pages/logout.php';
    } else if ($page === 'products') {
        include 'pages/products.php';
    } else if ($page === 'warehouse_products') {
        include 'pages/warehouse_products.php';
    } else if ($page === 'shop_products') {
        include 'pages/market_products.php';
    } else if ($page === 'session_off') {
        include 'pages/session_off.php';
    } else if ($page === 'to_market') {
        include 'pages/toMarket.php';
    } else if ($page === 'markets_statistics') {
        include 'pages/markets_statistics.php';
    }
    
    ?>
</div>
<br/><br/>
<footer>&copy 2022</footer>
</body>
</html>