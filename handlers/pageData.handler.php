<?php
    $menu = [
        "Home" => "/index.php",
        "Pets" => "/pages/pets/index.php",
        "About Us" => "/pages/about/index.php"
    ];

    $cats = [
        ["name" => "Oragne", "color" => "blue", "age" => 21, "bday" => "2004-03-19", "image" => "/pages/pets/assets/img/orange.gif"],
        ["name" => "George Bush", "color"=> "white", "age" => 2, "bday" => "2023-08-5", "image" => "/pages/pets/assets/img/george.gif"],
        ["name" => "Laughy", "color"=> "orange", "age" => 6, "bday" => "2019-09-1", "image"=> "/pages/pets/assets/img/laughy.gif"],
        ["name"=> "Tung Tung", "color"=> "white", "age" => 8, "bday" => "2017-05-29", "image"=> "/pages/pets/assets/img/tungtung.gif"]
    ];

    $dogs = [
        ["name" => "Browny", "color"=> "Brown", "age"=> 11, "bday" => "2014-01-30", "image" => "/pages/pets/assets/img/browny.gif"],
        ["name"=> "Blud", "color"=> "Black", "age" => 19, "bday" => "2006-02-23", "image" => "/pages/pets/assets/img/blud.gif"],
        ["name"=> "Snow", "color"=> "White", "age" => 5, "bday" => "2020-07-16", "image"=> "/pages/pets/assets/img/Snow.gif"],
        ["name"=> "Cupcake", "color"=> "Brown", "age" => 7, "bday" => "2018-04-19", "image"=> "/pages/pets/assets/img/cupcake.gif"],
    ];

    $others = [
        ["name"=> "Tralalero", "color"=> "Blue", "age" => 1000, "bday" => "1025-11-11", "image"=> "/pages/pets/assets/img/tralalero.gif"],
        ["name"=> "Patapim", "color"=> "Green/Brown", "age" => 30, "bday" => "1995-10-10", "image"=> "/pages/pets/assets/img/patapim.gif"]
    ];
    $categories = [
        "cats" => $cats,
        "dogs" => $dogs,
        "other" => $others
    ];