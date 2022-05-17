<?php require_once "./config.php"; session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include "./head.php"; ?>

<body>
    <?php include "./menu.php"; ?>
    <section class="inicio" id="inicio">
        <div class="firstDiv"></div>
        <div class="secondDiv">
            <div class="logo">
                <img src="./pictures/logo.png" alt="Logo da G-Web" class="logo">
                <div class="center">
                    <h3 class="slogan">Personalização para o sucesso do seu negocio</h3>
                    <p class="parag">Desenvolvimento de sites personalizados com recursos ilimitados, tudo isso baseado naquilo que você e/ou sua empresa precisa.</p>
                </div>
                <a href="./views/orçamento" class="effect effect-5">Orçamento</a>
            </div>
        </div>
    </section>
    <!-- Slogan
        Feedback
        Processo de desenvolvimento (avaliação, reunião, desenvolvimento, testes)
        Principais soluções + Orçamento
        Um pouco de nós -->
    <section class="section2" id="section2">
        <!-- Processo de desenvolvimento -->
        <div class="jumbotron top-space">
            <div class="container">
                <h1 class="text-center thin">Processo de desenvolvimento</h1>
                <div class="row">
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption">
                            <h4><i class="fa-solid fa-magnifying-glass"></i>Avaliação</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption">
                            <h4><i class="fa-solid fa-comments"></i>Reunião</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption">
                            <h4><i class="fa-solid fa-laptop-code"></i>Desenvolvimento</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption">
                            <h4><i class="fa-solid fa-circle-check"></i>Testes</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                        </div>
                    </div>
                </div> <!-- /row  -->
            </div>
        </div>
        <!-- /Highlights -->
        <div><br/></div>
        <!-- About -->

        <div id="soluOrcamento" class="soluOrcamento">
            <h1>Soluções</h1>
        </div>
        <div id="nos" class="nos">
            <h1>Nós</h1>
        </div>
        <div><?php include "./footer.php" ?></div>
    </section>
    <?php
    include "./views/btnVoltarAoTopo.php";
    ?>
</body>

</html>