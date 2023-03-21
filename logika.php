<?php

    // Penulisan array yang lama
    $namasiswa = array("Melpen Yogi");

    // Penulisanarray yang baru
    $nama = ["Melpen Penyo Yogi", "Samuel", "Mr. Janzen"];

    // var_dump($namasiswa);

    echo "<br>". $nama[0];
    echo "<br>". $nama[1];

    foreach($nama as $siswa)
    {
        echo "<br>". $siswa;
    }

    // array multi diensi

    $namaSaCode = [
        [
            "namadepan"     => "Melpen",
            "namabelakang"  => "Yogi",
            "usia"          => "21",
            "alamat"        => "Perumnas 2",

        ]

    ];

$namaSaCode = [
    [
        "namadepan"     => "Melpen",
        "namabelakang"  => "Yogi",
        "usia"          => "21",
        "alamat"        => "Perumnas 2",

    ]

];

            // tampilkan data
            $i = 0;
            foreach($namaSaCode as $nama)
            {
                echo "<br Siswa No ". ++$i ."<br>";
                echo "Nama : ". $nama["namadepan"]." ".$nama["namabelakang"] ."<br>";
                echo "alamat : " . $nama["alamat"]. "<br>";
                echo "usia : " . $nama["usia"]. "<br>";



            };
