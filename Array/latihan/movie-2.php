<?php
$datai ='{
    "intruksi": "Setelah seorang wanita hamil dibunuh, rohnya berusaha membalas dendam terhadap pembunuhnya yang semakin ketakutan, yang bertekad untuk menghabisinya untuk selamanya.",
    "judul": "Bernapas Dalam Kubur",
    "tahun": "2018",
    "Rated": "Approved",
    "tanggal": "15 November 2018",
    "waktu": " 125 menit",
    "Genre": [
      "Comedy",
      "Drama",
      "Horor"
    ],
    "Director": "Rocky Soraya",
    "Writers": [
      "Ferry Lesmana (Screenplay)",
      "Bene Dion Rajagukguk  (screenplay) (story)",
      "Sunil Soraya (screenplay)"
    ],
    "Actors": [
      "Luna Maya",
      "Herjunot Ali",
      "Teuku Rifnu Wikana",
      "Verdi Solaiman"
    ],
    "Plot": "Film ini mengisahkan Suzanna dan Satria yang sudah menikah selama lima tahun tapi belum punya anak.",
    "Language": "Bahasa zIndonesia",
    "Country": "Indonesia",
    "Awards": "Festival Film Bandung untuk Pemeran Utama Wanita Terpuji Film Bioskop",
    "Poster": "suzzanna.jpg",
    "imdbRating": "5.5",
    "imdbVotes": "862",
    "imdbID": "tt9044128"
  }';

  $da = json_decode($datai);
  echo "<center>";
  echo "Data Film<br>";
  echo "<b> {$da->judul}</b><br>";
  echo "<b> <img width=600 height=500 src= {$da->Poster}  /> </b><br>";
  echo "</center >";
 
  echo "  <br>";
  
  echo "<table>";
  echo "<tr>";
  echo "<td></td><td></td><td>{$da->intruksi}</td>";
  echo "</tr>";
  echo "<tr align=left>";
  echo "<th> Tahun Rilis";
  echo "<td> :";
  echo "<td> {$da->tahun}<br>";
  echo "<tr align=left>";
  echo "<th> Tanggal Rilis";
  echo "<td> :";
  echo "<td> {$da->tanggal}<br>";
  echo "<tr align=left>";
  echo "<th> Durasi Film";
  echo "<td> :";
  echo "<td> {$da->waktu}<br>";
  echo "<tr align=left>";
  echo "<th> Gendre Film";
  echo "<td> :";
  echo "<td>". implode(", ", $da->Genre )."</td>";
  echo "<tr align=left>";
  echo "<th> Direktur";
  echo "<td> :";
  echo "<td>{$da->Director}</td>";
  echo "<tr align=left>";
  echo "<th> Penulis";
  echo "<td> :";
  echo "<td> <lu><li>". implode("<li> ", $da->Writers )."</td>";
  echo "<tr align=left>";
  echo "<th> Aktor ";
  echo "<td> :";
  echo "<td> <li> ". implode("<li>  ", $da->Actors )."</li></td>";
  echo "<tr align=left>";
  echo "<th>Merencanakan";
  echo "<td> :";
  echo "<td> {$da->Plot}<br>";
  echo "<tr align=left>";
  echo "<th>Bahasa";
  echo "<td> :";
  echo "<td> {$da->Language}<br>";
  echo "<tr align=left>";
  echo "<th>Negara";
  echo "<td> :";
  echo "<td> {$da->Country}<br>";
  echo "<tr align=left>";
  echo "<th>Penghargaan";
  echo "<td> :";
  echo "<td> {$da->Awards}<br>";
  echo "<tr align=left>";
  echo "<th>Peringkat imdb";
  echo "<td> :";
  echo "<td> {$da->imdbRating}<br>";
  echo "<tr align=left>";
  echo "<th>Suara imdb";
  echo "<td> :";
  echo "<td> {$da->imdbVotes}<br>";
  echo "<tr align=left>";
  echo "<th>imdbID";
  echo "<td> :";
  echo "<td> {$da->imdbID}<br>";
  
  
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
    <style></style>
  </body>
  </html>