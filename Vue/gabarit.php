<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	SimpleBlog by FWT
	www.freewebsitetemplat.es
	Photos by Fotogrph http://fotogrph.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title><?= $titre ?></title>
        <link href="http://fonts.googleapis.com/css?family=Antic" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="Contenu/style.css" />
    </head>
    <body>
        <div id="outer">
            <!--.........Header .........-->
            <div id="header">
                <div id="logo">
                    <h1><a href="#">Simple<span>Blog</span></a></h1>
                </div>
                <!--......Menu de navigation.........-->
                <div id="nav">
                    <ul>
                        <li class="first">
                            <a href="index.php">Accueil</a>
                        </li>
                        <li>
                            <a href="index.php?action=blog">Blog</a>
                        </li>
                        <li>
                            <a href="index.php?action=APropos">A propos</a>
                        </li>
                        <li>
                            <a href="index.php?action=Contact"> Me contacter</a>
                        </li>
                        <li class="last">
                            <a href="index.php?action=Admin">Admin</a>
                        </li>
                    </ul>
                    <br class="clear" />
                </div>
            </div>
            <div id="main">
                <div id="content">
                    <?= $contenu ?>   <!-- Élément spécifique -->
                </div>
                <div id="sidebar">
                    <div class="widget">
                        <h3>Massa dui lectus</h3>
                        <p>
                            Consectetur ante quis convallis euismod ante.
                        </p>
                        <ul class="linkedList">
                            <li class="first">
                                <a href="#">Ornare auctor congue</a>
                            </li>
                            <li>
                                <a href="#">Placerat fusce metus</a>
                            </li>
                            <li>
                                <a href="#">Ornare hendrerit primis</a>
                            </li>
                            <li class="last">
                                <a href="#">Donec velit magnis</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br class="clear" />
            </div>
        </div>
        <div id="copyright">
            SimpleBlog by <a href="http://www.freewebtemplates.com">FWT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
        </div>
    </body>
</html>