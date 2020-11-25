<?php

// API mysqli untuk koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "univesitas_pasundan");

// Ambil semua data dari database
$result = $mysqli->query("SELECT * FROM mahasiswa");
$rows = $result->fetch_all();

// Konversi ke format JSON
$data_json = json_encode($rows);

// tampilkan data JSON
echo $data_json;
