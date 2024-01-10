<?php

spl_autoload_register('route_into_controller');

if (isset($_POST['schedTrigger']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_67_1st']) ? $_POST['monday_67_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_67_2nd']) ? $_POST['monday_67_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_67_1st']) ? $_POST['tuesday_67_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_67_2nd']) ? $_POST['tuesday_67_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_67_1st']) ? $_POST['wednesday_67_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_67_2nd']) ? $_POST['wednesday_67_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_67_1st']) ? $_POST['thursday_67_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_67_2nd']) ? $_POST['thursday_67_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_67_1st']) ? $_POST['friday_67_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_67_2nd']) ? $_POST['friday_67_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_67_1st']) ? $_POST['saturday_67_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_67_2nd']) ? $_POST['saturday_67_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_67_1st']) ? $_POST['sunday_67_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_67_2nd']) ? $_POST['sunday_67_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room_1']) ? $_POST['room_1'] : null,
        "room_2" => isset($_POST['room_2']) ? $_POST['room_2'] : null,
        "room_3" => isset($_POST['room_3']) ? $_POST['room_3'] : null,
        "room_4" => isset($_POST['room_4']) ? $_POST['room_4'] : null,
        "room_5" => isset($_POST['room_5']) ? $_POST['room_5'] : null,
        "room_6" => isset($_POST['room_6']) ? $_POST['room_6'] : null,
        "room_7" => isset($_POST['room_7']) ? $_POST['room_7'] : null,
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

function route_into_controller()
{
    include_once "../controller/func_scheduler.php";
}
