<?php
$answers = $_POST['answers'];
$correctAnswers = [1, 1, 1];
$i = -1;
$wrongAnswers = 0;

if (!$answers) {
    $return = array('success'=>false);
    echo json_encode($return);

    exit;
}

foreach ($answers as $answer) {
    $i++;
    if ($answer == $correctAnswers[$i]) {
        continue;
    }
    $wrongAnswers++;
}

if($wrongAnswers > 0) {
    $return = array('success'=>false);

} else {
    $return = array('success'=>true);
}

echo json_encode($return);
