
    <?php
    require("View/header.php");
    ?>
    <hr>
    <?php
    require("View/hero.html");
    ?>
    <hr>

    <main>

    <div class="row">
        <div class="col-10">

            <?php
            require("View/post-index.php");
            ?>

        </div>

        <div style="text-align: center;" class="col-2">

            <?php
            require("View/anuncio.html")
            ?>

        </div>

    </div>
    <hr>
        <?php
        require("View/card-vantagens.html");
        ?>

        <hr>
        
        <?php
        require("View/footer.html");
        ?>

    </main>
</body>
</html>

