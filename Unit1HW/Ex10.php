<?php 
	echo "Cho n=8 <br>";
	  for ($i = 0; $i < 8; $i++) {
            for ($k = 8; $k > 8 - $i; $k--) {
                echo"---";
            }
            for ($j = 8; $j > $i; $j--) {

                echo"-#";
            }

            echo"<br>";
        }
 ?>