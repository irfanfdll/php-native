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
         function tampilkanMenuBertingkat(array $menu){
             echo "<ul>";
             foreach ($menu as $key => $item {
                 echo "<li>{$item['nama']}</li>";
             }
             echo "</ul>";
         }
            echo    tampilkanMenuBertingkat($menu);
         ?>