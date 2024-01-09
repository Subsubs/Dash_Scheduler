<?php

spl_autoload_register('route_into_controller');

if (isset($_POST['schedTrigger']) === true) {
    $data = [
        "m1r" => $_POST['monday_1st_rw'],
        "m2r" => $_POST['monday_2nd_rw'],
        "t1r" => $_POST['tuesday_1st_rw'],
        "t2r" => $_POST['tuesday_2nd_rw'],
        "w1r" => $_POST['wednesday_1st_rw'],
        "w2r" => $_POST['wednesday_2nd_rw'],
        "th1r" => $_POST['thursday_1st_rw'],
        "th2r" => $_POST['thursday_2nd_rw'],
        "f1r" => $_POST['friday_1st_rw'],
        "f2r" => $_POST['friday_2nd_rw'],
        "sat1r" => $_POST['saturday_1st_rw'],
        "sat2r" => $_POST['saturday_2nd_rw'],
        "sun1r" => $_POST['sunday_1st_rw'],
        "sun2r" => $_POST['sunday_2nd_rw'],
        "nos1r" => $_POST['nos_1st_rw'],
        "nos2r" => $_POST['nos_2nd_rw'],
    ];
    echo json_encode($data);
}

function route_into_controller()
{
    include_once "../controller/func_scheduler.php";
}
