<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Ahmad Jaenudin",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Muhammad Irsyad",
            "MataKuliah" => [
            ["MataKuliah" => "Ulumul Hadits"],
            ["MataKuliah" => "Ulumnul Qur,an"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Memanah"],
            ["Hobi" => "Berkuda"]]],

            [ "nama" => "Arif Hidayat",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Ahmad Jaenudin",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Muhammad Irsyad",
            "MataKuliah" => [
            ["MataKuliah" => "Ulumul Hadits"],
            ["MataKuliah" => "Ulumnul Qur,an"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Memanah"],
            ["Hobi" => "Berkuda"]]],

            [ "nama" => "Arif Hidayat",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <fieldset><legend>Memanggil Array di Dalam Tabel</legend>
        <br><br>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
            echo "<td> <ul>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>    <li><?php echo  $sub['MataKuliah'] ;?>
                <?php
                }
                echo"</td> <td></ul><ul>";
                ?><?php
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']."</li>";
                }
                echo"</td> </ul>";
            }
            }
            ?>
            
            </tr>
        
        </table>
        <style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
<div style=text-align:right>Bandung,<?php echo date('d  F  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
    </fieldset>
    </body>
    </html>