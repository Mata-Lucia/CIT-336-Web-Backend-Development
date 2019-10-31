<!DOCTYPE html>
<html lang="en-us" background="images/site/background.jpg">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Homepage">
        <link rel="stylesheet" href="/mat18013-acme/css/small.css" type="text/css">
        <link rel="stylesheet" href="/mat18013-acme/css/large.css" type="text/css">
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/header.php'; ?>
        </header>
        <nav>
            <?php /* include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/navigation.php'; */
            echo $navList; ?>
        </nav>
        <main>
            <h1>Content Title Here</h1>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>