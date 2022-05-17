<nav id="menu-h" class="main_header container">
    <div class="content">
        <div class="main_header_logo">
            <a href="./index.php" title="G-Web"><img src="./pictures/icon.png" class="icon" alt="Icone G-Web" title="G-Web" style="height: 60px;" /></a>
        </div>
        <div class="icon icon-menu mobile_action"></div>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
            <ul class="main_header_nav">
                <li class="main_header_nav_item"><a class="scrollSuave" href="./index.php" title="Home"><i class="fa-solid fa-house"></i>  Home</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Gerar senha"><i class="fa-solid fa-book-open"></i>  Gerar senha</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Check-list"><i class="fa-solid fa-address-card"></i>  Check-list</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Sobre nós"><i class="fa-solid fa-building"></i>  Sobre nós</a></li>
                <li class="main_header_nav_item"><a href="./logout.php" class="scrollSuave" title="Logout"><i class="fa-solid fa-right-to-bracket"></i>  Logout</a></li>
            </ul>
        <?php } else { ?>
            <ul class="main_header_nav">
                <li class="main_header_nav_item"><a class="scrollSuave" href="./index.php" title="Home"><i class="fa-solid fa-house"></i>  Home</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Servicos"><i class="fa-solid fa-book-open"></i>  Serviços</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Contato"><i class="fa-solid fa-address-card"></i>  Contato</a></li>
                <li class="main_header_nav_item"><a class="scrollSuave" href="#" title="Sobre nos"><i class="fa-solid fa-building"></i>  Sobre nós</a></li>
                <li class="main_header_nav_item"><a href="./login.php" class="scrollSuave" title="Login"><i class="fa-solid fa-right-to-bracket"></i>  Login</a></li>
            </ul>
        <?php } ?>
        <div class="clear"></div>
    </div>
</nav>