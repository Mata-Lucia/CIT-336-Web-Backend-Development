<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ACME</title>
        <meta name="description" content="ACME Registration Page">
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
                <form method="post" action="/mat18013-acme/accounts/index.php">
                    <h1>ACME Registration</h1>
                    <label>First Name</label>
                    <input type="text" name="clientFirstname" id="clientFirstname" required><br>
                    <label>Last Name</label>
                    <input type="text" name="clientLastname" id="clientLastname" required><br>
                    <label>Email</label>
                    <input type="email" name="clientEmail" id="clientEmail" required><br>
                    <label>Password</label>
                    <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
                    <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">><br>
                    <div class="buttondiv">
                        <input type="submit" name="submit" id="regbtn" value="Register">
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="register">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/mat18013-acme/common/footer.php'; ?>
        </footer>
    </body>
</html>