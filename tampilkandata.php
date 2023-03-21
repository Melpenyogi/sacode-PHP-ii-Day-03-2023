<?php

$namaSiswa = ['Elia', 'Obed', "Aldhy", 'Delvi', 'Paul', 'Melpen'];

$namaSacode = [
    [
        "namadepan" => "Melpen",
        "namabelakang" => "Yogi",
        "usia" => "30",
        "alamat" => "Perumnas 2"
    ],
    [
        "namadepan" => "Janzen",
        "namabelakang" => "Faidiban",
        "usia" => "30",
        "alamat" => "Doyo Kab. Sentani"
    ],
    [
        "namadepan" => "Samuel",
        "namabelakang" => "Bosawer",
        "usia" => "30",
        "alamat" => "Doyo Kab. Sentani"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data dari Array</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #22a6b3;
            color: white;
            font-family: Arial-bold;
            font-size: 18px;
        }

        table,
        tr,
        td,
        th {
            border: 1px black solid;
        }

        table {
            width: 90%;
        }

        th {
            color: blue;
        }
    </style>
</head>

<body>
    <h3>Data Siswa</h3>
    <table class="table-auto border border-solid">
        <tr class="border-solid">
            <td>No.</td>
            <td>Nama</td>
        </tr>
        <?php $i = 0;
        foreach ($namaSiswa as $siswa) : ?>
            <tr class="border-solid">
                <td class=""><?php echo ++$i ?></td>
                <td><?php echo $siswa ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <br><br><br>
    <h3>Data Lengkap Siswa</h3>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Usia</th>
        </tr>
        <?php foreach ($namaSacode as $siswa) : ?>
            <tr>
                <td><?= ++$i ?></td>
                <td><?= $siswa['namadepan'] ?> <?= $siswa['namabelakang'] ?> </td>
                <td><?= $siswa['alamat'] ?></td>
                <td><?= $siswa['usia'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>