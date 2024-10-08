<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php
        //Pengerjaan Soal No 1
        echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!";
        $second_sentence = "I'm Ready For The Challenges";

        echo "Kalimat Pertama: \"$first_sentence\"<br>";
        echo "Panjang String: ".strlen($first_sentence). "<br>";
        echo "Jumlah Kata: ". str_word_count($first_sentence). "<br><br>";

        echo "Kalimat Kedua: \"$second_sentence\"<br>";
        echo "Panjang String: ".strlen($second_sentence). "<br>";
        echo "Jumlah Kata: ". str_word_count($second_sentence). "<br><br>";

        //Pengerjaan Soal No 2
        echo "<h3> Soal No 2</h3>";
        $string2 = "I Love PHP";
        echo"<label>String: </label> \"$string2\" <br>";
        echo "Kata Pertama: ". substr($string2, 0,1). "<br>";
        echo "Kata Kedua: ". substr($string2, 2,4). "<br>";
        echo "Kata Ketiga: ". substr($string2, 7,3). "<br>";

        //Pengerjaan Soal No 3
        echo "<h3> Soal No 3</h3>";
        $string3 = "PHP is old but sexy!";
        echo "String asli: \"$string3\"<br>";
        $string3 = str_replace("sexy", "awesome", $string3);
        echo "String setelah diubah: \"$string3\"<br>";

    ?>
</body>
</html>