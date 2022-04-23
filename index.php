<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
      
    </head>
    <body>
     <?php include 'setup.php';?> 
        <div class="header">
            <p>Lights out</p>
            <form action="" method="get">
                <label for="frame">Frame:</label>
                </br>
                <input type="number" id = "width" name="width" />
                <p>X</p>
                <input type="number" id = "length" name="length"/>
                <button class="startBtn" type="submit" >Start</button>
            </form>
        </div>

        <div class="game">
            <div id="wrapper">

            </div>
        <?php echo $jsonAns?>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  
        <script>
            var jsonStart = JSON.stringify(<?=$jsonAns;?>);
            console.log(jsonStart);
            var $row = $("<div />", {
                class: 'row'
            });
            var $square = $("<div />", {
                class: 'square'
            });
            
          
            $(document).ready(function(){
                $(".startBtn").click(function(){
                    //ajax
                    var length = $("#length").val();
                     var width = $("#width").val();
                     console.log(length);
                    $.ajax({url: "setup.php", 
                        
                        success: function(result) {
                            var jsonStart = result;
                            console.log(jsonStart);
                            for (var i = 0; i < length ; i++) {
                                //adding the y coordinate as id
                                var newsq =$square.clone();
                                $(newsq).attr("id",i);
                                $row.append(newsq);
                                
                            };
                            for (var y = 0; y < width; y++) {
                                //adding the x coordinate as id
                                var newel =$row.clone();
                                $(newel).attr("id",y);
                                $("#wrapper").append(newel);
                               
                                
                                
                            };
                    }
                }); }
                    
            )});
     
        </script>
    </body>
</html>