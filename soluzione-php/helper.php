<?php 
 
 function printCd($elem){
 echo "<div class='cd' >".
 "<img src='".$elem["poster"]."'alt=''>".
 "<p>". "Titolo: ". $elem["title"]."</p>".
 "<p>". "Autore: ". $elem["author"]."</p>"
 ."<p>". "Anno:". $elem["year"]."</p>".
 "</div>";
 }

    function printArray($arr)
    {
        foreach ($arr as $elem) {
            printCd($elem);
        }
    }
 
 ?>