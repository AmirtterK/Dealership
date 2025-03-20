<center>

        <form action="index.php" method="post" style="margin-top: 30px;">
            Model: <input type="text" name="name">
            <br>
            <br>
            HP: <input type="number" name="hp">
            <br>
            <br>
            <input type="submit">
            <br>
            <br>
            <?php
            if (!empty($_POST["name"])) {
                echo "model: ";
                echo  $_POST['name'];
            }
            if (!empty($_POST["hp"])) {
                echo    "<br>hp: ";
                echo  $_POST['hp'];
            }
            ?>
        </form>
        <p>
        

        </p>
    </center>