<!DOCTYPE html>
<html>
    <head>
        <title>Красный Беркут</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="Photo/Красный Беркут.jpg">
        <link rel="stylesheet" href="Messager.css">
    </head>
    <body>
        <?php
            if ($_COOKIE === null):
        ?>
        <script>
            alert('Для начала необходимо войти');
        </script>
        <?php else:?>
        <div>
            <div id="ColumnL">
                <br><br><br><br><br><br>
                <H3 class="ColumnUp">Чтобы создать диалог<br>нужно нажать<br></H3>
                <div id="FirstDialog">
                    <H2 id="NewDialog">Создать диалог</H2>
                </div>
            </div>
            <div id="ColumnR">
                <form action="Backend/Send.php" method="post">
                    <select name="Receiver" id="Receiver">
                        <?php
                            require 'Backend/Data.php';

                            $Stat = $Pdo->query("SELECT Id, Login FROM `main`");
                            while ($Row = $Stat->fetch()) {
                                echo "<option value='{$Row['Id']}'>{$Row['Login']}</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <div id="AllMessage">
                        <?php require 'Backend/Receive.php'?>
                    </div>
                    <br>
                    <button type="submit" id="Send"><img src="Photo/Отправить.jpg" id="SendImg" width="25px" height="25px"></button>
                    <br><br>
                    <input type="text" name="Message" id="InText" placeholder="Я пишу...">
                </form>
            </div>
        </div>
        <?php endif;?>
    </body>
    <script src="Messager.js"></script>
</html>

<!-- ColumnR -->
                <!-- <br><br><br><br><br><br>
                <img src="Photo/Красный Беркут.jpg" class="img" width="200px">
                <H2 class="white">Красный Беркут<br>Красный обмен сообщениями</H2>
                <br><br>
                <H2 class="white">Отечественная разработка<br>Для общения в России</H2> -->



                <!-- ColumnL -->
<!-- <div id="Up">
                    <button id="UpSearch"><H2>Поиск</H2></button>
                    <H1 id="UpNew">+</H1>
                </div> -->
                <?php // require 'Backend/NewChat.php'?>



                <!-- Messager -->
                <!-- <form action="Backend/Send.php" method="post">
                    <select name="Receiver" id="Receiver">
                        <?php
                            // require 'Backend/Data.php';

                            // $Stat = $Pdo->query("SELECT Id, Login FROM `main`");
                            // while ($Row = $Stat->fetch()) {
                            //     echo "<option value='{$Row['Id']}'>{$Row['Login']}</option>";
                            // }
                        ?>
                    </select>
                    <br>
                    <div>
                        <?php // require 'Backend/Receive.php'?>
                    </div>
                    <br>
                    <button type="submit" id="Send"><img src="Photo/Отправить.jpg" id="SendImg" width="25px" height="25px"></button>
                    <br><br>
                    <input type="text" name="Message" id="InText" placeholder="Я пишу...">
                </form> -->