<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <?php include 'setup.php';?>
        <div class="header">
            <p>Lights out</p>
            <form action="game.php" method="get">
                <label for="frame">Frame:</label>
                </br>
                <input type="number" name="width" />
                <p>X</p>
                <input type="number" name="length"/>
                <button type="submit" onclick="appendElements()">Start</button>
            </form>
        </div>

        <div class="game">
        <div id="grid-col">
            <div class="cell on">Cell</div> <div class="cell off">Cell</div>
            <div class="cell on">Cell</div> <div class="cell off">Cell</div>
            <div class="cell on">Cell</div> <div class="cell off">Cell</div>
        </div>
        <?php echo $jsonAns?>
        </div>

        
        <script>
            var jsonStart = JSON.stringify(<?=$jsonAns;?>);
            console.log(jsonStart);
            $document.ready(function(){
                


            });
            fucntion getGrid(){


            }
        </script>
    </body>
</html>