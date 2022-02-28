<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP test</title>
    </head>
    <body>

        <?php
            function isBitten() {
                $num = rand(0,1);
                if($num == 0){
                    return true;
                }else{
                    return false;
                }
            }
            
        ?>

        <h1>Lunch Time</h1>
        <p>Charlie 
            <?php 
                if(isBitten()){
                    echo("ate ");
                }else{
                    echo("did not eat ");
                }
            ?>
            my lunch
        </p>

    </body>
</html>