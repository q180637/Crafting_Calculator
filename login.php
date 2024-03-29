<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Login</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
    </head>
    <body>
        <div class="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Log in to your account
                </header>
                <ul id="mobile_links">
                    <li class="tool">
                        <a href="index.php">Calculator Tool</a>
                    </li>
                    <li class="login">
                        <a href="login.php">Login</a>
                    </li>
                    <li class="saves">
                        <a href="saved_weapons.php">Your Weapons</a>
                    </li>
                </ul>
            </nav>
            <div class="body_wrapper">
                <form action="php/login_func.php" method="post" class="form">
                    <?php if(isset($_GET["error"])){ ?>
                        <p class="error"> <?php echo $_GET["error"]; ?> </p> <?php
                    }?>
                    <label for="username" class="username">Insert your username</label>
                    <input type="text" id="username" name="username"></input>
                    <label for="password" class="passLabel">Insert your password</label>
                    <input type="password" id="password" name="password"></input>
                    <input id="sign_in" type="submit" value="Sign in" name="sign_up">
                    </input>
                    <div class="logout_button">
                        <a href="php/logout.php">
                            Logout
                        </a>
                    </div>
                    <div class="signup_link">
                        <h5>Don't have an account? Sign up <a href="sign_up.php">here</a></h5>
                    </div>
                </form>
            </div>
        </div>
        <div class="desktop">
            <nav>
                <ul class="links">
                    <li href="index.php">   
                        <a href="index.php"><img class="logo" src="img/destiny_logo.png" alt="Destiny Logo for Button"></a>
                    </li> 
                    <li class="tool">
                        <a href="index.php">Calculator Tool</a>
                    </li>
                    <li class="login">
                        <a href="login.php">Login</a>
                    </li>
                    <li class="saves">
                        <a href="saved_weapons.php">Your Weapons</a>
                    </li>
                </ul>
            </nav>
            <div class="body_wrapper">
                <form action="php/login_func.php" method="post" class="form">
                <?php if(isset($_GET["error"])){ ?>
                        <p class="error"> <?php echo $_GET["error"]; ?> </p> <?php
                    }?>
                    <label for="username" class="username">Insert your username</label>
                    <input type="text" id="username" name="username"></input>
                    <label for="password" class="passLabel">Insert your password</label>
                    <input type="password" id="password" name="password"></input>
                    <input id="sign_in" type="submit" value="Sign in" name="save_logon">
                    </input>
                    <div class="logout_button">
                        <a href="php/logout.php">
                            Logout
                        </a>
                    </div>
                    <div class="signup_link">
                        <h5>Don't have an account? Sign up <a href="sign_up.php">here</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>