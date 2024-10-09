<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
        //No 1
        echo "<h3>Soal No 1 Greetings</h3>";

        function greetings($name) {
            echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
        }
        
        greetings("Bagas");
        greetings("Wahyu");
        greetings("Nama Peserta");

        //No 2
        echo "<h3>Soal No 2 Reverse String</h3>";

        function reverseString($str) {
            $reversed = '';
            for ($i = strlen($str) - 1; $i >= 0; $i--) {
                $reversed .= $str[$i];
            }
            echo "$reversed<br>";
        }

        reverseString("Garuda Cyber Institute");
        reverseString("We Are GC-Ins Developer");

        //No 3
        echo "<h3>Soal No 3 Palindrome</h3>";

        function reverseStringForPalindrome($str) {
            $reversed = '';
            for ($i = strlen($str) - 1; $i >= 0; $i--) {
                $reversed .= $str[$i];
            }
            return $reversed;
        }
        
        function palindrome($str) {
            $reversed = reverseStringForPalindrome($str);
            
            echo "String awal: $str<br>";
            echo "String Reversed: $reversed<br>";
            
            if ($str == $reversed) {
                echo "Result: true (String di atas termasuk palindrome)<br><br>";
            } else {
                echo "Result: false (String di atas tidak termasuk palindrome)<br><br>";
            }
        }

        palindrome("civic");    
        palindrome("nababan");  
        palindrome("jambaban"); 
        palindrome("racecar");  

        //No 4
        echo "<h3>Soal No 4 Tentukan Nilai</h3>";

        function tentukan_nilai($nilai) {
            if ($nilai >= 85 && $nilai <= 100) {
                return "Sangat Baik<br>";
            } elseif ($nilai >= 70 && $nilai < 85) {
                return "Baik<br>";
            } elseif ($nilai >= 60 && $nilai < 70) {
                return "Cukup<br>";
            } else {
                return "Kurang<br>";
            }
        }

        echo tentukan_nilai(98); 
        echo tentukan_nilai(76); 
        echo tentukan_nilai(67); 
        echo tentukan_nilai(43); 
    ?>
</body>
</html>