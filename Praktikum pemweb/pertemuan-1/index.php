<?php
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>
<body>
    <table border="1">
        <?php

        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            ?>
            <tr>
                <td>Nomor <?= $nomor; ?></td>
                <td>NIM <?= $ns["nim"]; ?></td>
                <td>UTS <?= $ns["uts"]; ?></td>
                <td>UAS <?= $ns["uas"]; ?></td>
                <td>TUGAS <?= $ns["tugas"]; ?></td>
            </tr>
            <?php
            $nomor++;
        }
        ?>
    </table>
</body>
</html>