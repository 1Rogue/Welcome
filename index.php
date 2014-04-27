<?php
error_reporting(-1);
ini_set("display_errors", 1);

include 'JSONManager.php';

$dev = false;
if (isset($_GET['dev'])) {
    $dev = $_GET['dev'] == 1;
}
?>
<html>
    <head lang="en-US">
        <title>Spencer Alderman</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <link href="assets/css/cat.css" rel="stylesheet" media="screen" />
        <link rel="stylesheet/less" type="text/css" media="screen" href="assets/css/main.less" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
        <!--[if !IE 7]>
            <style type="text/css">
                #wrap {display:table;height:100%}
            </style>
        <!--[endif]-->
        <script src="less.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            <?
            if ($dev) {
                echo "complete = 0;";
            }
            ?>
        </script>
    </head>
    <body>
        <div class="container span8">
            <div id="wrap">
                <div id="header">
                    <h1 class="inline">Spencer Alderman</h1>
                    <div class="hire inline pull-right">
                        <a class="btn btn-pink" href="https://codelanx.com/">Hire me!</a>
                    </div>

                </div>
                <div id="content">
                    <span>I am a student at Rochester Institute of Technology,
                        studying for my Masters in Computer Science. I do development
                        in Java and C++, and create websites using a mix of nodejs,
                        PHP, and SQL. I've worked as a programming instuctor
                        at <a href="http://internaldrive.com/">iD Tech</a> and as
                        a Forum Administrator on <a href="http://minecraftforum.net/user/1019993-">
                        minecraftforum.net</a>. I am also a staff member for 
                        <a href="http://dev.bukkit.org/">BukkitDev</a>, a popular
                        site for distribution of plugins for Bukkit.</span>
                    <br />
                    <span>Born in Rutland, Vermont, I continue online for
                        work and fun combined. On most sites my alias is 
                        <strong>1Rogue</strong>, but you may find me under aliases
                        such as <strong>OneRogue</strong> or even just
                        <strong>Rogue</strong>. I can be reached at
                        <a href="mailto:spencer@1rogue.com">spencer@1rogue.com</a>.</span>
                    <hr>
                    <?
                    $manager = new JSONManager("projects");
                    ?>
                    <div class="navbar">
                        <div class="navbar-inner navbar-pink">
                            <ul class="nav">
                                <li class="nav-fill<? echo (!$dev) ? " active" : "" ?>">
                                    <a class="nav-left" href="#">Completed</a>
                                </li>
                                <li class="nav-fill<? echo ($dev) ? " active" : "" ?>">
                                    <a class="nav-right" href="#">In Progress</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="completed"<? echo ($dev) ? " style=\"display:none;\"" : ""?>>
                        <?
                        foreach ($manager->getComplete() as $proj) {
                            $manager->printProject($proj);
                        }
                        ?>
                    </div>
                    <div id="development"<? echo (!$dev) ? " style=\"display:none;\"" : ""?>v>
                        <?
                        foreach ($manager->getDevelopment() as $proj) {
                            $manager->printProject($proj);
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div id="footer">
                <span class="pull-right">&copy; <a href="https://github.com/1Rogue/Welcome">Spencer Alderman</a> 2013</span>
            </div>
        </div>
    </body>
</html>