<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>
    <?php
        //your code here
        /* multi lane comment */
        // echo "Welcome to PHP";
        // echo 1;
        //echo "100" + "100";
        // echo "Nama Saya " . "M Naufal";
        // echo "Nama Saya " , "M Naufal";
        // string dan string digabung dengan tanda titik/koma(. ,)
        // echo "20 + 5 = " . (20 + 5);
    ?>
    <h1><?php echo "Welcome To My First PHP Page"; ?></h1>
    <?php
        // Membuat variabel
        //1. Konstanta (Statis /  tidak bisa diubah)
        define("nama", "Muhammad Naufal Anugrah");
        define("tgl_lahir", "2002-10-19");
        define("status", "Single");
        define("ipk", 4.00);
        define("menikah", false);
        //echo nama; // memanggil var konstanta
        // var_dump(menikah);//cek variabel/ tipe data

        //2. Dinamis 
        $jenis_kelamin = "Laki-laki";
        $jenisKelamin = "Perempuan";
        // echo $jenis_kelamin;
        $jenis_kelamin = "Perempuan";
        // echo $jenis_kelamin;

        $p = 3.14;
        $r = 21;
        // echo $p * ($r * $r);
        //type casting
        $r2 = (int) $r;
        var_dump($r2);

        //casting boolean
        $benar = true;
        // var_dump($benar);
        $inBenar = (int) $benar;
        // var_dump($inBenar);

        //array
        //array = list
        //list of fruit
        $buah = array("Apel", "Jerukk", "Anggur", 50);
        $buah2 = ["Apel", "Jerukk", "Anggur"];
        // var_dump($buah);
        // var_dump($buah2);
        $buah[4] = "Mangga";
        //var_dump($buah);

        //assosiatif array
        $mhs = array("nama" => "Muhammad Naufal Anugrah", "npm" => "2024250063");
        echo $mhs["nama"];
    ?>
</body>
</html>
