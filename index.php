<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dischi</title>
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="cd">

      </div>
    </script>
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <?php 
        include "data.php";

        foreach ($database as $cd){
            $title = $cd["title"] . "<br>";
            $author = $cd["author"] . "<br>";
            $year = $cd["year"] . "<br>";
            $poster = $cd["poster"];
        }
    ?>

</head>
<body>


    <div class="container">
        
        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>

        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>

        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>

        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>

        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>

        <div class="cd">
            <img src="<?php echo $poster ?>" alt="">
            <p class="title">Titolo: <?php echo $title ?></p>
            <p class="author">Titolo: <?php echo $author ?></p>
            <p class="year">Titolo: <?php echo $year ?></p>
        </div>
    
    </div>




</body>
</html>