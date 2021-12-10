<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@500&family=Fruktur&family=Irish+Grover&family=Roboto:ital,wght@1,100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap');
    </style>
</head>
<body>
    <div class="navbar">
        <div class="username">
            <?php
                session_start();
                $username = $_SESSION["username"];
                $username = ucfirst($username);
                echo "username: " . $username;
            ?>
        </div>
        <div class="logout">
            <a href="./index3.php">Log out</a>
        </div>
    </div>
    <div class="total">
        <form action="index2.php" method="POST">
            <div class="banner">
                <h1 class="chifoumi">
                    Chifoumi
                </h1>
                <h2 class="choisir">
                    Choissez votre monstre :
                </h2>
                <div class="container">
                    <div class="block block-1">
                        <button type="img" name="submit-pierre"><img class='img-scale' src='./images/pierre.PNG' alt='image carte pierre'></button>
                    </div>
                    <div class="block block-2">
                        <button type="img" name="submit-feuille"><img class='img-scale' src='./images/feuille.PNG' alt='image carte feuille'></button>
                    </div>
                    <div class="block block-3">
                        <button type="img" name="submit-ciseaux"><img class='img-scale' src='./images/ciseaux.PNG' alt='image carte ciseaux'></button>
                    </div>
                </div>
            </div>
            <div class="fond-2">
            <div class="banner-2">
                <div class="container-2">
                    <div class="blok-1">
                        <div class="el el-1">
                            <?php
                            if (isset($_POST["submit-pierre"]) or isset($_POST["submit-feuille"]) or isset($_POST["submit-ciseaux"])){
                                echo "Moi :";
                            }
                            ?>
                        </div>
                        <div class="img img-1">
                            <?php
                            if (isset($_POST["submit-pierre"])) {
                                echo "<img src='./images/pierre.PNG' alt='image carte pierre'>";
                            }
                            if (isset($_POST["submit-feuille"])) {
                                echo "<img src='./images/feuille.PNG' alt='image carte feuille'>";
                            }
                            if (isset($_POST["submit-ciseaux"])) {
                                echo "<img src='./images/ciseaux.PNG' alt='image carte ciseaux'>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="blok-2">
                        <div class="el el-2">
                            <?php
                            if (isset($_POST["submit-pierre"]) or isset($_POST["submit-feuille"]) or isset($_POST["submit-ciseaux"])){
                                echo "Ordi :";
                            }
                            ?>
                        </div>
                        <div class="img img-2">
                            <?php
                            if (isset($_POST["submit-pierre"])) {
            $ordi = rand(1, 3);
            if ($ordi ===1) {
                echo "<img src='./images/ciseaux.PNG' alt='image carte ciseaux'>";
            } elseif ($ordi === 2) {
                echo "<img src='./images/pierre.PNG' alt='image carte pierre'>";
            } else {
                echo "<img src='./images/feuille.PNG' alt='image carte feuille'>";
            }
        }
            if (isset($_POST["submit-feuille"])) {
            $ordi = rand(1, 3);
            if ($ordi ===1) {
                echo "<img src='./images/pierre.PNG' alt='image carte pierre'>";
            } elseif ($ordi === 2) {
                echo "<img src='./images/feuille.PNG' alt='image carte feuille'>";
            } else {
                echo "<img src='./images/ciseaux.PNG' alt='image carte ciseaux'>";
            }
        }
                if (isset($_POST["submit-ciseaux"])) {
            $ordi = rand(1, 3);
            if ($ordi ===1) {
                echo "<img src='./images/feuille.PNG' alt='image carte feuille'>";
            } elseif ($ordi === 2) {
                echo "<img src='./images/ciseaux.PNG' alt='image carte ciseaux'>";
            } else {
                echo "<img src='./images/pierre.PNG' alt='image carte pierre'>";
            }
        }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="resultat">
                    <?php
                    if (isset($_POST["submit-pierre"])) {
                        if ($ordi > 2) {
                            echo "Résultat : perdu";
                        } elseif ($ordi < 2) {
                            echo "Résultat : gagné";
                        } else{
                            echo "Résultat : égalité";
                        }
                    }
                        if (isset($_POST["submit-feuille"])) {
                        if ($ordi > 2) {
                            echo "Résultat : perdu";
                        } elseif ($ordi < 2) {
                            echo "Résultat : gagné";
                        } else{
                            echo "Résultat : égalité";
                        }
                    }
                            if (isset($_POST["submit-ciseaux"])) {
                        if ($ordi > 2) {
                            echo "Résultat : perdu";
                        } elseif ($ordi < 2) {
                            echo "Résultat : gagné";
                        } else{
                            echo "Résultat : égalité";
                        }
                    }
                    ?>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>