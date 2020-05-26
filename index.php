<?php
//simple echo to make sure page is working

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/Test1.php';
require __DIR__ . '/src/Truck.php';
echo $_SERVER['HTTP_USER_AGENT'];
use TestNamespace\Test1\Test1;
use Causey\Model\Truck;
$test1 = new Test1;
$test2 = new Test1;
$truck = new Truck("short", true, true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
</head>
<body>
<?php include('header.php'); ?>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
        <p>Back to <a href="/docs/4.5/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
    </div>
    <?php
    $test1->first = "John";
    $test1->last = "schatzel";
    var_dump($test1->first);
    echo "<br/>";
    var_dump($test2);
    echo "<br/>";
    var_dump($truck);
    ?>
</main>
<?php include('footer.php'); ?>
</body>
</html>