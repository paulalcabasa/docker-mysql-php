<?php

phpinfo();
// $mysqli = new mysqli('db','root','example','company1');
$mysqli = new mysqli('172.16.1.34','root','latropcpi','ipc_central', 3306);

// $sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
// $result = $mysqli->query($sql);

// $sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
// $result = $mysqli->query($sql);

// $sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
// $result = $mysqli->query($sql);

// $sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
// $result = $mysqli->query($sql);

$sql = "SELECT * FROM ipc_central.section_tab";
$result = $mysqli->query($sql);

while ($data = $result->fetch_object()) {
    print_r($data);
    echo "<Br/>";
}
// $sql = "SELECT * FROM users";

// if ($result = $mysqli->query($sql)) {
//     while ($data = $result->fetch_object()) {
//         $users[] = $data;
//     }
// }

// foreach ($users as $user) {
//     echo "<br/>";
//     echo $user->name . " " . $user->fav_color;
//     echo "<br/>";;
// }