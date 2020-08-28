<?php
    function greet($name, $color){
        echo "<p>Hello $name, color $color</p>";
    }

    greet('John', 'blue');
    greet('Jane', 'color');

?>

<h1><?php bloginfo('name') ?></h1>
<p><?php bloginfo('description') ?></p>