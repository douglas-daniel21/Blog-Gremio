
    <?php
    require("header.php");
    ?>
    <hr>
    <?php
    require("require/hero.html");
    ?>
    <hr>

    <main>

    <div class="row">
        <div class="col-10">

            <?php
            require("require/post.php");
            ?>

        </div>

        <div style="text-align: center;" class="col-2">

            <?php
            require("require/anuncio.html")
            ?>

        </div>

    </div>
    <hr>
        <?php
        require("require/card-socio.html");
        ?>

        <hr>
        <div style="padding-left: 10px; padding-rigth: 10px; text-align: center;">
            <div class="row">
                <div class="col">
                    <?php
                    require("carrosel-ata.php");
                    ?>
                </div>

                <div class="col">
                    <?php
                    require("carrosel-mc.php");
                    ?>
                </div>

                <div class="col">
                    <?php
                    require("carrosel-def.php");
                    ?>
                </div>

                <div class="col">
                    <?php
                    require("carrosel-gol.php");
                    ?>
                </div>

            </div>
            <h4 style="padding: 10px;">
                <a style="padding: 10px;color: white; background-color: skyblue; border-radius: 10px;" href="jogador.php">Ver Jogadores</a>
            </h4>
        </div>
        <hr>
        
        <?php
        require("require/footer.html");
        ?>

    </main>
</body>
</html>

