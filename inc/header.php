<?php
session_start();  
if (!isset($_SESSION['login'])) { 
   header ('Location: connexion.php'); 
   exit();  
}  
?>
<?php
include ('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>GCO</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="<?php echo $rootsite; ?>/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $rootsite; ?>/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="<?php echo $rootsite; ?>/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="<?php echo $rootsite; ?>/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="<?php echo $rootsite; ?>/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="<?php echo $rootsite; ?>/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $rootsite; ?>/js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>
</head>
<body>

    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <h1><font color=white>LSI INFORMATIQUE - GCO</font></h1></div>
                 <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Bienvenue <?php echo $_SESSION['login']; ?></li>
                            <li><a href="#">Config</a></li>
                            <li><a href="deconnexion.php">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey"><u>Version Actuel:</u> <?php if($maj_update == $version){echo "$version <font color=green>A JOURS</font>";}else{echo "Votre version n est pas a jours veuillez contacter l editeur du logiciel '.$version --> $maj_update'";} ?></span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="./index.php"><span>Accueil</span></a> </li>
                <li class="ic-form-style"><a href="./client.php"><span>Client</span></a></li>
                <li class="ic-typography"><a href="./intervention.php"><span>Intervention</span></a></li>


            </ul>
        </div>
        <div class="clear">
        </div>