<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Login Page">
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
                <form action="/mat18013-acme/accounts/index.php" method="post">
                    <h1>ACME Login</h1>
                    <label>Email</label>
                    <input type="email" name="clientEmail" required><br>
                    <label>Password</label>
                    <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
                    <input type="text" name="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br>
                    <div class="buttondiv">
                        <a href="#" class="button">Log In</a>
                    </div>
                    <p>Don't have an account yet?</p>
                    <div class="buttondiv">
                        <a href="/mat18013-acme/accounts/index.php?action=registration" class="button">Register</a>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>