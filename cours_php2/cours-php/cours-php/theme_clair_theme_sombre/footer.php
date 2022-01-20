    </body>
        <footer>
            <p>Merci d'être venu ici !</p>

        <?php
            setcookie("nomCookie","Le contenu du cookie", time()+60*60*24*90);
            setcookie("dateDerniereVisite",date("d/m/y H:i:s"), time()+60*60*24*90);

            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";
        ?>

        </footer>
</html>