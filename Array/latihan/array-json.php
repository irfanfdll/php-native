<?php

$dataJson = '{
  "nama": "Irfan Fadillah",
  "domisili": "Bandung",
  "usia": 18,
  "wni": true,
  "hobi": [
    "Berenang", "Memnacing", "Menangkap ubur-ubur"
  ]
}';

$data = json_decode($dataJson);
echo "<table>";
echo "<tr>";
echo "<td>Nama</td><td> : </td> <td>{$data->nama}</td> ";
echo "<tr>";
echo "<td>Usia</td><td>:</td><td> {$data->usia}</td> ";
echo "<tr>";
echo "<td>Domisili</td><td>:</td> <td>{$data->domisili}</td>";
echo "<tr>";
echo "<td>Hobi</td><td>:</td> <td>" . implode(", ", $data->hobi )."</td>";
echo "</table>";