<?php
require_once('link.php');
$count = 1;
$all = $link -> query("SELECT * FROM `actor` JOIN `theatres` ON `theatres`.id = `actor`.`theatre` ORDER BY `name` DESC");
$res = $all -> fetch_all(MYSQLI_ASSOC);
?>
    <table border="1px">
        <tr>
            <th>№ п\п</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Театр</th>
        </tr>
        <?php
        for($i = 0; $i < count($res); $i++){

            $id = $res[$i]['theatre'];
            $name = $res[$i]['name'];
            $email = $res[$i]['email'];
            $theatre = $res[$i]['name-theatres'];
            echo '<tr>';
            echo '<td>' . $count . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $email . '</td>';
            echo '<td>' . $theatre . '</td>';
            echo '</tr>'; 
            $count++;
        }

        ?>
