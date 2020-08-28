<?php 
    $names = array('Brad', 'John', "Meowsalot");
    $count = 0;

    while($count < count($names)) {
        echo "<li>$names[$count]</li>";
        $count++;
    }
?>

<p>Hi, my name is <?php echo $names[1]; ?></p>