<?php
$nomor_telphone = [
    "khawaritzmi" => "081234567890",
    "BUdi" => "08134567891",
    "siti" => "08134567892",
    "Andi" => "08134567893", 
    "Dewi" => "08134567894",
];

//#1. Menambahkan data "Fajar" dan "Rina" ke dalam array
$nomor_telphone["Fajar"] = "081234567895";
$nomor_telphone["Rina"] = "081234567896";

//#2. Cek key "Andi" dan "Steven"
// Cek untuk Andi
if (array_key_exists("Andi", $nomor_telphone)) {
    echo "Nomor telephone Andi: " . $nomor_telphone["Andi"] . "<br>";
} else {
    echo "Nomor telpon Andi tidak ditemukan<br>";
}

// Cek untuk Steven
if (array_key_exists("Steven", $nomor_telphone)) {
    echo "Nomor telephone Steven: " . $nomor_telphone["Steven"] . "<br>";
} else {
    echo "Data nomor telephone Steven tidak ditemukan<br>";
}

echo "<br>"; 

//#3. Menampilkan semua key & value tanpa foreach dan berjajar ke bawah di browser
$keys = array_keys($nomor_telphone);
$values = array_values($nomor_telphone);

echo implode("<br>", array_map(function($nama, $nomor) {
    return $nama . ": " . $nomor;
}, $keys, $values)) . "<br>";