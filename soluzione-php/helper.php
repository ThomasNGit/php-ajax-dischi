<?php 
 
 function printCd($elem){
 echo "<div class='song' >"."<img src='".$elem["poster"]."'alt=''>"  ."<p>". $elem["title"]. "</p>"."<p>".$elem["author"] . "</p>"."<p>". $elem["year"]. "</p>"."</div>";
 }

    function printArray($arr)
    {
        foreach ($arr as $elem) {
            printCd($elem);
        }
    }
 
 ?>