    <?php
    // on teste si le visiteur a soumis le formulaire de connexion
    if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') { 
       if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) { 
     
          $base = mysql_connect ('localhost', 'root', ''); 
          mysql_select_db ('gco', $base); 
          
          // on teste si une entrée de la base contient ce couple login / pass
          $sql = 'SELECT count(*) FROM users WHERE login="'.mysql_escape_string($_POST['login']).'" AND password="'.mysql_escape_string(md5($_POST['pass'])).'"'; 
          $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
          $data = mysql_fetch_array($req); 
          
          mysql_free_result($req); 
          mysql_close(); 
          
          // si on obtient une réponse, alors l'utilisateur est un membre
          if ($data[0] == 1) { 
             session_start(); 
             $_SESSION['login'] = $_POST['login']; 
             header('Location: index.php'); 
             exit(); 
          } 
          // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
          elseif ($data[0] == 0) { 
             $erreur = '
             <div class=message error>
              <h5>Erreur:</h5>
              <p>Compte non reconnu</p>
            </div>
             '; 
          } 
          // sinon, alors la, il y a un gros problème :)
          else { 
             $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.'; 
          } 
       } 
       else { 
          $erreur = 'Au moins un des champs est vide.'; 
       }  
    }  
    ?>
    <html>
    <head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <meta charset=utf8>
    </head>
     
    <body>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>GCO</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="./js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="./js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="./js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="./js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="./js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="./css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
        <script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.donutRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"></script>
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
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="clear">
        </div>
          <div class="grid_10">
            <div class="box round">
                <h2>
                    GCO Connexion</h2>
                <div class="block">
                  <center>
                    <form action="connexion.php" method="post">
                    <table>
                      <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"></td>
                      </tr>
                      <tr>
                        <td>Mot de Passe:</td>
                        <td><input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"></td>
                      </tr>
                    </table>
                    <input type="submit" name="connexion" value="Connexion">
                  </form>
                    <?php
                    if (isset($erreur)) echo '<br /><br />',$erreur;  
                    ?>
                  </center>
                </div>
            </div>
        </div>


    </body>
    </html> 

