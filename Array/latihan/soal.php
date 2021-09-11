<?php
$data =[
    [
        "namaDosen" => "Aceng Fikri"
        "siswa"=> [
            [

        "nama" => "Abdul"    
        "mataKuliah" => [
            ["matkul" => "fisika"],
            ["mstkul" => "matematika"],
            ["matkul" -=> "Biologi"]
        ],
        "hobi" => [
            ["hobinya" => "Memancing"],
            ["hobinya" => "Main Bola"]
            ]
        ]
        ]
    ]
        ];

        foreach($data as $key => $val){
            echo $val['namaDosen']. "<br>";
        
    //     foreach($val['siswa'])
    // } 


//         foreach($menu as $key => $val)
// {

//     echo $val['nama']."<br>";
//     echo "<ul>";

//     foreach($val['subMenu'] as $menu)
//     {
//         echo"<li>" . $menu['nama'] .   "</li>";
//         echo"<ol>";
//         foreach($menu['subMenu'] as $sub){
//             echo "<li>". $sub['nama']. "</li>";
//         }
//         echo "</ol>";
//     }
//     echo "</ul>";
// }

?>