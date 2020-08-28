<?php
    function bloginfo($name, $color){
        echo "<p>Hello $name, color $color</p>";
    }

    bloginfo('John', 'blue');
    bloginfo('Jane', 'color');

?>

<h1><?php bloginfo() ?></h1>