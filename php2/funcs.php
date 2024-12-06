<?php
function countSredniy($id , $link){
    require_once('link.php');
    $marks = $link -> query("SELECT `mark-mark` FROM `mark` WHERE `name-student` = '$id'");
    $marks = $marks -> fetch_all(MYSQLI_ASSOC);
    $all_marks = count($marks);
    $count_marks = 0;
    foreach($marks as $elem){
        $count_marks += $elem['mark-mark'];
    }
    return $count_marks / $all_marks;
}
function CalculateRating($sred){
    if ($sred > 0 and $sred <= 2.99){
        return 1;
    }elseif($sred >= 3 and $sred <= 3.99){
        return 2;
    }elseif($sred >= 4 and $sred <= 5){
        return 3;
    }
}
?>