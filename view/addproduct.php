<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Add Product Page">
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
                <form class="productreg" action="/mat18013-acme/products/index.php" method="post">
                    <h1>ACME Add Product</h1>
                    <label>Product Name</label><br>
                    <input type="text" name="invName" id="invName"><br><br>
                    <label>Product Description</label><br>
                    <input type="text" name="invDescription" id="invDescription"><br><br>
                    <label>Product Image</label><br>
                    <input type="text" value="mat18013-acme/images/no-image.png" name="invImage" id="invImage"><br><br>
                    <label>Product Thumbnail</label><br>
                    <input type="text" value="mat18013-acme/images/no-image.png" name="invThumbnail" id="invThumbnail"><br><br>
                    <label>Product Price</label><br>
                    <input type="text" name="invPrice" id="invPrice"><br><br>
                    <label>Product Stock</label><br>
                    <input type="text" name="invStock" id="invStock"><br><br>
                    <label>Product Size</label><br>
                    <input type="text" name="invSize" id="invSize"><br><br>
                    <label>Product Weight</label><br>
                    <input type="text" name="invWeight" id="invWeight"><br><br>
                    <label>Product Location</label><br>
                    <input type="text" name="invLocation" id="invLocation"><br><br>
                    <label>Category Id</label><br>
                    <?php echo $catList;?><br>
                    <label>Product Vendor</label><br>
                    <input type="text" name="invVendor" id="invVendor"><br><br>
                    <label>Product Style</label><br>
                    <input type="text" name="invStyle" id="invStyle"><br><br>

                    <input type="submit" name="submit" id="regproductbtn" value="Register">
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="finalProductReg">
                </form>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>