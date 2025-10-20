<?php

    $cars = array("Ferrari", "Camaro", "BMW", "Porsche");
    $games = ["Last of Us", "God of War"];

    //print_r($cars); 

    // for ($i = 0, $i < count($cars); $i++)
    // {
    // echo($cars[i]);
    // }

    // foreach($cars as $cars)
    // {
    //     echo($cars);
    // }

    $student1 = [
        'name' => 'Mitzy',
        'id' => 123456,
        'grade' => 'A'
    ];
    print_r($student1);
    echo $student1['name'];

    $student2 = [
        'name' => 'Billy',
        'id' => 654321,
        'grade' => 'B+'
    ];

    $roster239 = [
        $student1,
        $student2,
        [
        'name' => 'Tom',
        'id' => 112233,
        'grade' => 'B'
        ]
    ];

    // print_r($roster239);

    foreach($roster239 as $student)
    {
        // print_r($student);
        echo($student['name'] . "-" . $student['grade'] . "/n");
    };
    