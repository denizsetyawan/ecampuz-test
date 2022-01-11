<?php
function fooBar($par)
{
    for ($i=1; $i<=$par; $i=$i+1){
        if ($i % 3==0 && $i % 5!=0 ){
            echo "<br>";
            echo "Foo";
        }
        elseif ($i % 5==0 && $i % 3!=0){
            echo "<br>";
            echo "Bar";
        }
        elseif ($i % 3==0 && $i % 5==0){
            echo "<br>";
            echo "FooBar";
        }
        else {
          echo "<br>";
          echo $i;
        }
    }
}

echo fooBar(50);
?>