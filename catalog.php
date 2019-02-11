<?
require_once (__DIR__ . '/functions.php');

$stock = csvToArray(__DIR__ . '/stock.csv', ';', true, 'cp1251');

$table = ShowTable($stock, $_GET['model'], '240398');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Catalog</title>

    </head>
    <body>
        <div class="catalog-wrap">
            <div class="catalog-model">
                <div class="catalog-model__img">
                    <img src="" alt="">
                </div>
                <span class="catalog-model__caption"></span>
                <span class="catalog-model__price"></span>
            </div>
        </div>
    </body>
</html>