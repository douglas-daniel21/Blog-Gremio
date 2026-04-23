
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
        
        <?php
        require("require/footer.html");
        ?>

    </main>
</body>
</html>

