<?php
$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

foreach ($users as $user){
    foreach ($user as $thing){
        echo "$thing <br>";
    }
    echo "<br>";
}
?>