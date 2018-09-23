<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="icon" type="imagem/png" href="img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/<?php echo $style; ?>.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
    <link rel="stylesheet" href="css/plugins.css">
</head>
<body>

<?php include('includes/organisms/menu-responsivo.php');?>

<div class="layout">
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logowhite_th.png" alt="Logo Topo Tag" class="src">
                </a>
            </div>

            <div class="links">
                <?php include('includes/organisms/menu.php');?>

                <a href="javascript:;" class="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/thiago.pires.967?ref=bookmarks" class="fab fa-facebook"></a>
                    </li>
                    <li>
                        <a href="https://github.com/ThiagoThe" class="fab fa-github-alt"></a>
                    </li>
                </ul>
            </div>
            <h1><strong>Thiago </strong><strong>Pires</strong></h1>

            <p>Code // Share // Reboot</p>
        </div>
    </header>
</div>
<main>
