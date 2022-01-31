<?php
if (!empty($_GET)) {
    if (isset($_GET['name'], $_GET['fname'], $_GET['age'])
        && !empty($_GET['name']) && !empty($_GET['fname']) && !empty($_GET['age'])) {

        $name = $_GET['name'];
        $name = strip_tags(trim($name));

        $fname = $_GET['fname'];
        $fname = strip_tags(trim($fname));

        $age = $_GET['age'];
        $age = (int)$age;
        ?>

        <p>user name: <?=$name?></p>
        <p>name : <?=$fname?></p>
        <p>age: <?=$age?></p>

        <?php
    }
}
