<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Homepage">
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
            <h1>Welcome to ACME!</h1>
            <div class="heroimg">
                <img src="/mat18013-acme/images/site/rocketfeature.jpg" alt="Coyote lighting explosive" class="hero">
                <ul>
                    <li><h2>Acme Rocket</h2></li>
                    <li>Quick lighting fuse</li>
                    <li>NHTSA approved seat belts</li>
                    <li>Mobile launch stand included</li>
                    <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="/mat18013-acme/images/site/iwantit.gif" class="takeit"></a></li>
                </ul>
            </div>
            <div class="content">
                <div class="reviews">s
                    <h2>Acme Rocket Reviews</h2>
                    <ul>
                        <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                        <li>"That thing was fast!" (4/5)</li>
                        <li>"Talk about fast delivery." (5/5)</li>
                        <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                        <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                    </ul>
                </div>
                <div>
                    <h2>Featured Recipes</h2>
                    <div class="recipes">
                        <div>
                            <img src="/mat18013-acme/images/recipes/bbqsand.jpg" alt="Pulled Roadrunner BBQ">
                            <div class="linktitle">
                                <a href="#">Pulled Roadrunner BBQ</a>
                            </div>
                        </div>
                        <div>
                            <img src="/mat18013-acme/images/recipes/potpie.jpg" alt="Roadrunner Pot Pie">
                            <div class="linktitle">
                                <a href="#">Roadrunner Pot Pie</a>
                            </div>
                        </div>
                        <div>
                            <img src="/mat18013-acme/images/recipes/soup.jpg" alt="Roadrunner Soup">
                            <div class="linktitle">
                                <a href="#">Roadrunner Soup</a>
                            </div>
                        </div>
                        <div>
                            <img src="/mat18013-acme/images/recipes/taco.jpg" alt="Roadrunner Tacos">
                            <div class="linktitle">
                                <a href="#">Roadrunner Tacos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>