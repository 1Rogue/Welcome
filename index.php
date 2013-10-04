<?php
error_reporting(-1);
ini_set("display_errors", 1);

include 'ProjectManager.php';
?>
<html>
    <head lang="en-US">
        <title>Spencer Alderman</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="assets/css/cat.css" rel="stylesheet" media="screen">
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/jquery.js"></script>
    </head>
    <body>
        <div class="container span8">
            <div id="wrap">
                <div id="header">
                    <h1 class="head-inline">Spencer Alderman</h1>
                    <a class="head-inline pull-right btn btn-pink hire" href="https://www.freelancer.com/users/9006520.html">Hire me!</a>

                </div>
                <div id="content">
                    <span>I am a student at Rochester Institute of Technology,
                        studying for my Masters in Computer Science. I do development
                        in Java and C++, and create websites using a mix of nodejs,
                        PHP, and SQL. I've also worked as a programming instuctor
                        at <a href="http://internaldrive.com/">iD Tech</a> and as
                        a Forum Administrator on <a href="http://minecraftforum.net/user/1019993-">
                            minecraftforum.net</a>.</span>
                    <br>
                    <span>Born in Rutland, Vermont, I continue online for
                        work and fun combined. On most sites my alias is 
                        <strong>1Rogue</strong>, but you may find me under aliases
                        such as <strong>OneRogue</strong> or even just
                        <strong>Rogue</strong>. I can be reached at
                        <a href="mailto:sja6885@rit.edu">sja6885@rit.edu</a>.</span>
                        <hr>
                        <?
                        $manager = new ProjectManager();
                        $dev = array();
                        $comp = array();
                        foreach ($manager->getProjects() as $proj) {
                            $proj->isComplete() ? array_push($comp, $proj) : array_push($dev, $proj);
                        }
                        ?>
                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="nav">
                                    <li class="nav-fill active">
                                        <a href="#">Completed</a>
                                    </li>
                                    <li class="nav-separator">|</li>
                                    <li class="nav-fill"><a href="#">In Progress</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
            <div id="footer">
                <span>Footer text</span>
            </div>
        </div>
    </body>
</html>