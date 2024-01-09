<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["user_id"]) || !isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}

// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="img/Dash1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css3/style.css">
    <link rel="stylesheet" type="text/css" href="css3/print.css" media="print">
</head>
<body>
    <div class="mytabs">
    <input type="radio" id="tabfree" name="mytabs" checked="checked">
    <label for="tabfree" id="print-btn">Faculty Schedule</label>
    <div class="tab">
      <table class="table table-bordered print">
      
      <thead>
          <tr>
            <td colspan="1"> <img src="img/BSU LOGO.png" height="100" width="100"></td>
            <td colspan="7"> Reference No.: BatStateU-REC-COL-01</td>
            <td colspan="7"> Effectivity Date: January 3, 2017</td>
            <td colspan="4"> Revision No.: 00</td>
          </tr>
        </thead>
        <thead>
          <tr>
            <th colspan="18"> FACULTY SCHEDULE</th>
            
          </tr>
        </thead>
        <thead>
          <tr>
            <td colspan="1"> College:</td>
            <td class= "ju" colspan="9"> College of Engineering</td>
            <td colspan="1"> Campus:</td>
            <td class= "ju" colspan="7"> BatStateU - Alangilan</td>
          </tr>
        </thead>
        <thead>
          <tr>
            <td colspan="1"> Name of Faculty:</td>
            <td class= "ju" colspan="9"> <select  class="dropdown" id="usernameDropdown">
                                          <option id="print-btn" value="" selected>Instructor</option>
                                          <?php
                                          $options_qry = "SELECT DISTINCT NameofFaculty FROM faculty";
                                          $options_res = mysqli_query($conn, $options_qry);
                                          while ($option_data = mysqli_fetch_assoc($options_res)) {
                                              echo '<option value="' . $option_data['NameofFaculty'] . '">' . $option_data['NameofFaculty'] . '</option>';
                                          }
                                          ?>
                                      </select></td>
            <td colspan="1"> Semester:</td>
            <td class= "ju" colspan="2"> Second</td>
            <td colspan="2"> Academic Year:</td>
            <td class= "ju" colspan="3"> 2023-2024</td>
          </tr>
        </thead>
        <thead>
<tr>
<td><strong>Time</strong></td>
<td><strong>Monday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Tuesday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Wednesday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Thursday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Friday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Saturday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Sunday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Course Code</strong></td>
<td><strong>Section</strong></td>
<td><strong>No. Of Students</strong></td>
</tr>
</thead>

<tbody id="classScheduleTableBody">

<tr>
<td rowspan="2">6:00 - 7:00</td>
<td>  <input id="edit_monday_67_1st_rw" class="form-control" /></td>
<td rowspan="2"> <input id="edit_room_1" class="form-control" /></td>
<td>  <input id="edit_tuesday_67_1st_rw" class="form-control" /></td>
<td rowspan="2">  <input id="edit_room_2" class="form-control" /></td>
<td>  <input id="edit_wednesday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_3" class="form-control" /> </td>
<td>  <input id="edit_thursday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_4" class="form-control" /> </td>
<td>  <input id="edit_friday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_5" class="form-control" /> </td>
<td>  <input id="edit_saturday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_6" class="form-control" /> </td>
<td>  <input id="edit_sunday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_7" class="form-control" /> </td>
<td></td>
<td></td>
<td> <input id="edit_last_67_1strw" class="form-control" /></td>
</tr>
<tr>
<td> <input id="edit_monday_67_2nd_rw" class="form-control" /> </td>
<td > <input id="edit_tuesday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_wednesday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_thursday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_friday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_saturday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_sunday_67_2nd_rw" class="form-control" /></td>
<td></td>
<td></td>
<td> <input id="edit_last_67_2ndrw" class="form-control" /></td>
</tr>
<tr>
<td rowspan="2">7:00 - 8:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">8:00 - 9:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">9:00 - 10:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">10:00 - 11:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">11:00 - 12:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">12:00 - 1:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">1:00 - 2:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="6">
<p> <br /><br /><br /><strong>Timeline</strong><br /> Timeline</p>
</td>
</tr>
<tr>
<td rowspan="2">2:00 - 3:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">3:00 - 4:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">4:00 - 5:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="6">
<p> <br /><br /><br /><strong>PROF. PAULINA M. MACATANGAY</strong><br />Dean, COE</p>
</td>
</tr>
<tr>
<td rowspan="2">5:00 - 6:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">6:00 - 7:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">7:00 - 8:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="8">
<p><br /><br /><br /><br /><br /><br /><strong>PROF. PAULINA M. MACATANGAY</strong><br />Vice Chancellor for Academic Affairs</p>
</td>
</tr>
<tr>
<td >Official time</td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
</tr>
<tr>
<td >No. of Teaching Hours</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr >
<td >Overtime Within</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr>
<td>Overtime Outside</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr>
<td >DESIGNATION:&nbsp;</td>
<td colspan="14"></td>
</tr>
<tr>
<td colspan="2">NO. OF PREPARATIONS:</td>
<td colspan="3"></td>
<td colspan="2">REGULAR LOAD:</td>
<td colspan="3"></td>
<td colspan="2">ACADEMIC RANK:</td>
<td colspan="3"></td>
</tr>
<tr>
<td colspan="2">NO. OF HOURS PER WEEK</td>
<td colspan="3"></td>
<td colspan="2">OVERLOAD:</td>
<td colspan="3"></td>
<td colspan="2">CONSULTATION HOURS:</td>
<td colspan="3"></td>
</tr>
</tbody>
      </table>
      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
    
    <input type="radio" id="tabsilver" name="mytabs">
<label for="tabsilver" id="print-btn">Class Schedule</label>
<div class="tab">
    <table class="table table-bordered print">
<thead>
<tr>
<td><img src="img/BSU LOGO.png" height="100" width="100" /></td>
<td colspan="7">
<p>Reference No.: BatStateU-REC-COL-01</p>
</td>
<td colspan="7">
<p>Effectivity Date: January 3, 2017</p>
</td>
<td colspan="3">
<p>Revision No.: 00</p>
</td>
</tr>
<tr>
<th colspan="18">
<p>CLASS SCHEDULE</p>
</th>
</tr>
<tr>
<td style="width: 117.067px; height: 37px;">
<p>College:</p>
</td>
<td class="ju" colspan="9">
<p>College of Engineering</p>
</td>
<td>
<p>Campus:</p>
</td>
<td class="ju" colspan="7">
<p>BatStateU - Alangilan</p>
</td>
</tr>
<tr>
<td>
<p>Section:</p>
</td>
<td class="ju" colspan="9">
<select class="dropdown" id="user1nameDropdown">
                                            <option id="print-btn" value="" selected>Section</option>
                                            <?php
                                            $options_qry = "SELECT DISTINCT Department_code FROM sections";
                                            $options_res = mysqli_query($conn, $options_qry);
                                            while ($option_data = mysqli_fetch_assoc($options_res)) {
                                                echo '<option value="' . $option_data['Department_code'] . '">' . $option_data['Department_code'] . '</option>';
                                            }
                                            ?>
                                        </select>
</td>
<td>
<p>Semester:</p>
</td>
<td class="ju" colspan="2">
<p>Second</p>
</td>
<td colspan="2">
<p>Academic Year:</p>
</td>
<td class="ju" colspan="3">
<p>2023-2024</p>
</td>
</tr>
<tr>
<td>
<p><strong>Time</strong></p>
</td>
<td>
<p><strong>Monday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Tuesday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Wednesday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Friday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Saturday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Course Code</strong></p>
</td>
<td>
<p><strong>Instructor</strong></p>
</td>
<td>
<p><strong>No. Of Students</strong></p>
</td>
</tr>
</thead>
<thead></thead>
<thead></thead>
<thead></thead>
<thead></thead>
<tbody id="classScheduleTableBody">
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>8:00 - 9:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>9:00 - 10:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>10:00 - 11:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>11:00 - 12:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">Timeline</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>12:00 - 1:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>1:00 - 2:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">
<p><br />Dean, COE<br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>2:00 - 3:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>3:00 - 4:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="10">
<p>VCAA</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><br /><br /><br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>4:00 - 5:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>5:00 - 6:00</p>
</td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>


</div>


  

    <input type="radio" id="tabgold" name="mytabs">
    <label for="tabgold" id="print-btn"> Room Utilization</label>
    <div class="tab">
      <table class="table table-bordered print">
<thead>
<tr>
<td><img src="img/BSU LOGO.png" height="100" width="100" /></td>
<td colspan="7">
<p>Reference No.: BatStateU-REC-COL-01</p>
</td>
<td colspan="7">
<p>Effectivity Date: January 3, 2017</p>
</td>
<td colspan="3">
<p>Revision No.: 00</p>
</td>
</tr>
<tr>
<th colspan="18">
<p>ROOM UTILIZATION</p>
</th>
</tr>
<tr>
<td style="width: 117.067px; height: 37px;">
<p>College:</p>
</td>
<td class="ju" colspan="9">
<p>College of Engineering</p>
</td>
<td>
<p>Campus:</p>
</td>
<td class="ju" colspan="7">
<p>BatStateU - Alangilan</p>
</td>
</tr>
<tr>
<td>
<p>Room:</p>
</td>
<td class="ju" colspan="9">
<select class="dropdown" id="user1nameDropdown">
                                            <option id="print-btn" value="" selected>Room</option>
                                            <?php
                                            $options_qry = "SELECT DISTINCT room_number FROM rooms";
                                            $options_res = mysqli_query($conn, $options_qry);
                                            while ($option_data = mysqli_fetch_assoc($options_res)) {
                                                echo '<option value="' . $option_data['room_number'] . '">' . $option_data['room_number'] . '</option>';
                                            }
                                            ?>
                                        </select>
</td>
<td>
<p>Semester:</p>
</td>
<td class="ju" colspan="2">
<p>Second</p>
</td>
<td colspan="2">
<p>Academic Year:</p>
</td>
<td class="ju" colspan="3">
<p>2023-2024</p>
</td>
</tr>
<tr>
<td>
<p><strong>Time</strong></p>
</td>
<td>
<p><strong>Monday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Tuesday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Wednesday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Friday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Saturday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>Course Code</strong></p>
</td>
<td>
<p><strong>Section</strong></p>
</td>
<td>
<p><strong>No. Of Students</strong></p>
</td>
</tr>
</thead>
<thead></thead>
<thead></thead>
<thead></thead>
<thead></thead>
<tbody id="classScheduleTableBody">
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>8:00 - 9:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>9:00 - 10:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>10:00 - 11:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>11:00 - 12:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">Timeline</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>12:00 - 1:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>1:00 - 2:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">
<p><br />Dean, COE<br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>2:00 - 3:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>3:00 - 4:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="10">
<p>VCAA</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><br /><br /><br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>4:00 - 5:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>5:00 - 6:00</p>
</td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>


    </div>

    <button id="print-btn" onclick="window.location.href='logout.php'" class="btnlogout"> Logout </button>
    
    <script>
      var edit_monday_67_1st_rw = document.getElementById('edit_monday_67_1st_rw')
      var edit_monday_67_2nd_rw = document.getElementById('edit_monday_67_2nd_rw')

      var edit_tuesday_67_1st_rw = document.getElementById('edit_tuesday_67_1st_rw')
      var edit_tuesday_67_2nd_rw = document.getElementById('edit_tuesday_67_2nd_rw')

      var edit_wednesday_67_1st_rw = document.getElementById('edit_wednesday_67_1st_rw')
      var edit_wednesday_67_2nd_rw = document.getElementById('edit_wednesday_67_2nd_rw')

      var edit_thursday_67_1st_rw = document.getElementById('edit_thursday_67_1st_rw')
      var edit_thursday_67_2nd_rw = document.getElementById('edit_thursday_67_2nd_rw')

      var edit_friday_67_1st_rw = document.getElementById('edit_friday_67_1st_rw')
      var edit_friday_67_2nd_rw  = document.getElementById('edit_friday_67_2nd_rw ')

      var edit_saturday_67_1st_rw = document.getElementById('edit_saturday_67_1st_rw')
      var edit_saturday_67_2nd_rw = document.getElementById('edit_saturday_67_2nd_rw')
      
      var edit_sunday_67_1st_rw = document.getElementById('edit_sunday_67_1st_rw')
      var edit_sunday_67_2nd_rw = document.getElementById('edit_sunday_67_2nd_rw')

      var edit_last_67_1strw = document.getElementById('edit_last_67_1strw')
      var edit_last_67_2ndrw = document.getElementById('edit_last_67_2ndrw')

      var edit_room_1 = document.getElementById('edit_room_1')
      var edit_room_2 = document.getElementById('edit_room_2')
      var edit_room_3 = document.getElementById('edit_room_3')
      var edit_room_4 = document.getElementById('edit_room_4')
      var edit_room_5 = document.getElementById('edit_room_5')
      var edit_room_6 = document.getElementById('edit_room_6')
      var edit_room_7 = document.getElementById('edit_room_7')
      
      function onSave() {
        const obj = {
          monday_1st_rw: edit_monday_67_1st_rw.value,
          monday_2nd_rw: edit_monday_67_2nd_rw.value,

          tuesday_1st_rw: edit_tuesday_67_1st_rw.value,
          tuesday_2nd_rw: edit_tuesday_67_2nd_rw.value,
          
          wednesday_1st_rw: edit_wednesday_67_1st_rw.value,
          wednesday_2nd_rw: edit_wednesday_67_2nd_rw.value,

          thursday_1st_rw: edit_thursday_67_1st_rw.value,
          thursday_2nd_rw: edit_thursday_67_2nd_rw.value,

          friday_1st_rw: edit_friday_67_1st_rw .value,
          friday_2nd_rw: edit_friday_67_2nd_rw .value,

          saturday_1st_rw: edit_saturday_67_1st_rw.value,
          saturday_2nd_rw: edit_saturday_67_2nd_rw.value,

          sunday_1st_rw: edit_sunday_67_1st_rw.value,
          sunday_2nd_rw: edit_sunday_67_2nd_rw.value,

          last_1st_rw: edit_sunday_67_1st_rw.value,
          last_2nd_rw: edit_sunday_67_2nd_rw.value,

          room_1: edit_room_1.value,
          room_2: edit_room_2.value,
          room_3: edit_room_3.value,
          room_4: edit_room_4.value,
          room_5: edit_room_5.value,
          room_6: edit_room_6.value,
          room_7: edit_room_7.value,
        }

        $.ajax({
          method: 'post',
          data: obj,
          url: 'index.php',
          success: function(response) {
          }
        })
      }
      var initialState = "<?php echo $currentState; ?>";
      document.getElementById("toggle-edit").innerText = initialState;

      function onToggle() {
        var toggleButton = document.getElementById('toggle-edit')
        var currentState = toggleButton.innerText.toLowerCase()
        if (currentState === 'edit') {
          toggleButton

          function onSave() {
           
          }


$(document).ready(function () {
    // Function to update the content of a tab
    function updateTabContent(dropdown, tabContent) {
        // Get the selected username from the dropdown
        var selectedUsername = dropdown.val();

        // Update the content of the tab with the selected username
        tabContent.text(selectedUsername);
    }

    // Bind the update function to the change event of the first dropdown and second tab
    $('#usernameDropdown').change(function () {
        updateTabContent($(this), $('#secondTabContent'));
    });

    $('#usernameDropdown').change(function () {
        updateTabContent($(this), $('#second1TabContent'));
    });


    // Call the update function initially to set the default content for the second tab
    updateTabContent($('#usernameDropdown'), $('#secondTabContent'));

    // Bind the update function to the change event of the second dropdown and third tab
    $('#user1nameDropdown').change(function () {
        updateTabContent($(this), $('#thirdTabContent'));
    });

    $('#user1nameDropdown').change(function () {
        updateTabContent($(this), $('#third1TabContent'));
    });


    // Call the update function initially to set the default content for the third tab
    updateTabContent($('#user1nameDropdown'), $('#thirdTabContent'));
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
</div>

</body>
</html>
