<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Add Category Page">
        <link rel="stylesheet" href="/mat18013-acme/css/small.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/mat18013-acme/css/large.css" type="text/css" media="screen">
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
            <div class="form">
                <?php
                    if (isset($message)) {
                    echo $message;
                    }
                ?>
                <form action="/mat18013-acme/products/index.php" method="post">
                    <h1>ACME Add Category</h1>
                    <label>Category Name</label>
                    <input type="text" name="categoryName" id="categoryName"><br>
                    <input type="submit" name="submit" id="regcategorybtn" value="Register">
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="finalCategoryReg">
                </form>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>