<header class="navbar navbar-expand navbar-dark bg-dark flex-column flex-md-row bd-navbar">
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link" href="etudiants.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>
            <li class="nav-item exit "><a class="nav-link " href="logOut.php">LogOut [ <?php echo ((isset($_SESSION['PROFILE'])) ? ($_SESSION['PROFILE']['LOGIN']) : ""); ?> ]</a></li>
        </ul>
    </div>
</header> 