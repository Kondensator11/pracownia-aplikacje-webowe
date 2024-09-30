<html>
    <head>
        <meta charest='UTF-8'>
        <title> zadania </title>
    </head>
    <body>
    <?php
        echo "<br>zadanie 1 <br> ";
        $StopnieC = 7;
        $StopnieF = $StopnieC * 1.8 + 32;
        $StopnieF = <<<SF
            stopnie Fahrenheita wymoszą: $StopnieF 
        SF;
        echo $StopnieF;
        echo "<br><br> zadanie 2 <br><br>";
        $liczba1 = 10;
        $liczba2 = 10;
        $odejmowanie = "-";
        $dodawanie = "+";
        $mnozenie = "*";
        $dzielenie = "/";
        $rowna = "=";
        $wynik1 = $liczba1 - $liczba2;
        $wynik2 = $liczba1 + $liczba2;
        $wynik3 = $liczba1 * $liczba2;
        $wynik4 = $liczba1 / $liczba2;
        echo "$liczba1 $odejmowanie $liczba2 $rowna $wynik1 <br>";
        echo "$liczba1 $dodawanie $liczba2 $rowna $wynik2 <br>";
        echo "$liczba1 $mnozenie $liczba2 $rowna $wynik3 <br>";
        echo "$liczba1 $dzielenie $liczba2 $rowna $wynik4 <br>";
        echo "<br> zadanie 3 <br>";
        $promien = 5;
        echo (pi()*($promien*$promien));
        echo "<br><br> zadanie 4 <br><br>";
        $wiek = 14;
        $Dni = $wiek * 365;
        $wiekDni = <<<WD
        Wiek Podany w dniach: $Dni
        WD;
        echo $wiekDni;
        echo "<br><br> Zadanie 5 <br><br>";
        $a = (string)'k';
        $b = (integer)14;
        $c = (float)4.4;
        $d = (boolean)true;
        echo $a . "<br>" . $b ."<br>" . $c . "<br>" . $d . "<br>";

        






    ?>
    </body>
</html>
