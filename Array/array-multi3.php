<?php

$menu = [
                "nama" => "Tentang",
                "subMenu" => [
              
              [
                 "nama" => "Olahraga",
                 "subMenu" => [
                      [
                        "nama" => "Bola"
                      ],
                      [
                        "nama" => "Bulu Tangkis"
                      ]
                      ]
                      ],
                  
                  [
                    "nama" => "Politik",
                    "subMenu" => [
                  [
                      "nama" => "Partai Banteng"
                  ],
                  [
                    "nama" => "Ekonomi"
                  
                  ]
                  ]
                  ],
                  [
                    "nama" => "Manca Negara",
                    "subMenu" => [
                        [
                            "nama" => "Internasional"
                        ],
                        [
                            "nama" => "Word"
            
                        ]
                                ]
                  
                            ]
              ]
         ];

foreach($menu as $key => $val)
{

    echo $val['nama']."<br>";
    echo "<ul>";

    foreach($val['subMenu'] as $menu)
    {
        echo"<li>" . $menu['nama'] .   "</li>";
        echo"<ol>";
        foreach($menu['subMenu'] as $sub){
            echo "<li>". $sub['nama']. "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}
?>