<?php

//Simple array
$info = "<h2>Simple array</h2><table><tbody><tr><th>Details</th></tr>";
$house = ["3 rooms", "2 bathrooms", "Strada Larga 3"];
foreach($house as $row) {
    $info .= "<tr><td>$row</td></tr>";
}
$info .= "</tbody></table>";

//Associative array
$info .= "<h2>Associative array</h2><table><tbody><tr><th>Details</th></tr>";
$myHouse = array("baths"=> 2, "rooms"=> 3, "address"=> "Strada Larga 3");
foreach($myHouse as $key=>$row) {
    $info .= "<tr><td>$key: $row</td></tr>";
}
$info .= "</tbody></table>";

//Multidimensional array
$info .= "<h2>Multidimensional array</h2><table><tbody><tr><th>Details</th></tr>";
$houseBlock = ["myHouse" => ["baths"=> 2, "rooms"=> 3, "address"=> "Strada Larga 3"], "yourHouse" => ["baths"=> 1, "rooms"=> 4, "address"=> "Strada Larga 5"]];
foreach($houseBlock as $key1=>$house) {
    foreach($house as $key2=>$row) {
        $info .= "<tr><td>$key1, $key2: $row</td></tr>";
    }
}
$info .= "</tbody></table>";

echo $info;