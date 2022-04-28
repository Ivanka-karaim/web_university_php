<?php
include_once "./compponents/head.php" ?>
<body>
<?php include_once "./compponents/header.php" ?>
<main class="main">
    <?php
    $page=trim(strip_tags($_GET['page']));
    if (!$page) {
        include_once "./pages/general.php";
    }
    elseif (in_array($page, ['catalog', 'general', 'our_works','product','products','services'])) {
        include_once "./pages/$page.php";
    }
    else echo "<h1>Not fount</h1>";
    ?>
</main>
<?php include_once "./compponents/footer.php" ?>
</body>
<?php include_once "./compponents/link.php" ?>
