<?php


$arr = [
    "name" => "Teknoloji",
    "children" => [
        [
            "name" => "Telefon",
            "children" => [
                ["name" => "Akıllı Telefon"], ["name" => "Sabit Telefon"]]
        ],
        [
            "name" => "Bilgisayar",
            "children" => [
                ["name" => "Masaüstü"],
                ["name" => "Laptop"]
            ],
        ],
        [
            "name" => "Tablet",
            "children" => [
                ["name" => "IOS"],
                ["name" => "Android"],
                ["name" => "Windows",
                    "children" => [['name' => "7",], ["name" => "10"]]
                ]
            ]
        ]
    ]
];

function recMenu($arg)
{
    echo '<ul>';
    echo '<li>' . $arg['name'] . '</li>';
    if (isset($arg['children'])) {

        foreach ($arg["children"] as $child) {
            recMenu($child);

        }
    }

    echo "</ul>";

}

recMenu($arr);

