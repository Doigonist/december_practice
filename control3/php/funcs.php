<?php
require_once('link.php');
function countCity($city, $link){
    $student = 0;
    $chinovnik = 0;
    $rabochii = 0;
    $uchenii = 0;
    $res_student = $link -> query("SELECT `post_people` FROM `civilian` WHERE `adress_people` = '$city'");
    $res_student = $res_student -> fetch_all(MYSQLI_ASSOC);
    for($i = 0; $i < count($res_student); $i++){
        if($res_student[$i]['post_people'] == 1){
            $chinovnik++;
        }elseif($res_student[$i]['post_people'] == 2){
            $student++;
        }elseif($res_student[$i]['post_people'] == 3){
            $rabochii++;
        }elseif($res_student[$i]['post_people'] == 4){
            $uchenii++;
        }
    }
    $all_civilian = count($res_student);
    $student_per = ($student / $all_civilian) * 100;
    $chinovnik_per = ($chinovnik / $all_civilian) * 100;
    $rabochii_per = ($rabochii / $all_civilian) * 100;
    $uchenii_per = ($uchenii / $all_civilian) * 100;
    for($i = 1; $i < 4; $i++){
        if($student_per > $chinovnik_per && $student_per > $rabochii_per && $student_per > $uchenii_per && $student_per >= 20){
            return 'Студенческий';
        }elseif($chinovnik_per >= 20 && $chinovnik_per > $student_per && $chinovnik_per > $rabochii_per && $chinovnik_per > $uchenii_per){
            return 'Чиновничий';
        }elseif($rabochii_per >= 20 && $rabochii_per > $chinovnik_per && $rabochii_per > $student_per && $rabochii_per > $uchenii_per){
            return 'Рабочий';
        }elseif($uchenii_per >= 20 && $uchenii_per > $student_per && $uchenii_per > $chinovnik_per && $uchenii_per > $rabochii_per){
            return 'Ученый';
        }else{
            return 'Не развивается';
        }
    }
}
?>