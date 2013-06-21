<?php
include ('inc/header.php');
?>
<!--         <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Menu 1</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                              
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 2</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 3</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 4</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 6</a> </li>
                                <li><a>Submenu 7</a> </li>
                                <li><a>Submenu 8</a> </li>
                                <li><a>Submenu 9</a> </li>
                                <li><a>Submenu 10</a> </li>
                    
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="grid_10">
            <div class="box round">
                <h2>
                    Statistique</h2>
                <div class="block">
                    <div class="stat-col">
                        <span>Client</span>
                        <?php
                        $query_client = mysql_query("SELECT * FROM client");
                        $donnees_client = mysql_fetch_row($query_client);
                        ?>
                        <p class="purple">
                            <?php if($donnees_client!=0){echo $donnees_client;}else{echo "0";} ?></p>
                    </div>
                    <div class="stat-col">
                        <span>Intervention en cours</span>
                        <?php
                        $query_inter_cours = mysql_query("SELECT * FROM intervention WHERE etat=1");
                        $donnees_inter_cours = mysql_fetch_row($query_inter_cours);
                        ?>
                        <p class="yellow">
                            <?php if($donnees_inter_cours!=0){echo $donnees_inter_cours;}else{echo "0";} ?>
                        </p>
                    </div>
                    <div class="stat-col">
                        <span>Intervention</span>
                        <?php
                        $query_inter = mysql_query("SELECT * FROM intervention");
                        $donnees_inter = mysql_fetch_row($query_inter);
                        ?>
                        <p class="green">
                            <?php if($donnees_inter!=0){echo $donnees_inter;}else{echo "0";} ?></p>
                    </div>
                    <div class="stat-col">
                        <span>Contrat</span>
                        <p class="blue">
                            99.9%</p>
                    </div>
                    <div class="stat-col">
                        <span>Difference</span>
                        <p class="red">
                            693.00</p>
                    </div>
                    <div class="stat-col">
                        <span>Stats with Icon</span>
                        <p class="purple">
                            <img src="img/icon-direction.png" alt="" />&nbsp;65,000</p>
                    </div>
                    <div class="stat-col last">
                        <span>Total</span>
                        <p class="darkblue">
                            70,000</p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="box round">
                <h2>
                    Column on Left</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/horizontal.jpg" alt="Ginger" class="left" />Lorem ipsum dolor sit
                        amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="box round">
                <h2>
                    Right Column</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/vertical.jpg" alt="Ginger" class="right" />Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.</p>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editors now use Lorem Ipsum as their default model text, and
                        a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).</p>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright <a href="#">BlueWhale Admin</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
