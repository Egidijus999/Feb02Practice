<h3>1.Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100.Atspausdinti juos į ekraną.</h3>
<br>
<?php
    for ($x = 0; $x < 4; $x++) {
        echo $atsitiktiniai1=rand(0,100);echo"<br>";
    }
?>
<br>
<h3>2.Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. <br> Išvesti juos į ekraną. <br> Visus nelyginius
    skaičius padidinti dvigubai. <br> Išvesti visus skaičius į ekraną.</h3>
<?php
    $array = [];
    $a=$b=$c=$d=0;
    
        $a=rand(0,100);echo"<br>";
        $b=rand(0,100);echo"<br>";
        $c=rand(0,100);echo"<br>";
        $d=rand(0,100);echo"<br>";
        echo 'a='.$a.'b='.$b.'c='.$c.'d='.$d;

    if ($a%2!==0){
        $a = $a*2;
        echo"<br>";
        echo $a."";
    }
    if ($b%2!==0){
        $b = $b*2;
        echo"<br>";
        echo $b."";
    }
    if ($c%2!==0){
        $c = $c*2;
        echo"<br>";
        echo $c."";
    }
    if ($d%2!==0){
        $d = $d*2;
        echo"<br>";
        echo $d."";
    }
    echo 'a='.$a.'b='.$b.'c='.$c.'d='.$d;
?>


<h3>3.Sugeneruoti atsitiktinį skaičių nuo1 iki 7. Atitinkamai pagal skaičiųparašyti kokia tai savaitės diena.</h3>

<?php
$rand = rand(1,7);
echo $rand;
if($rand ==1){
    echo 'pirmadienis';
}
if($rand ==2){
    echo 'antradienis';
}    
if($rand ==3){
    echo 'treciadienis';
}
if($rand ==4){
    echo 'ketvirtadienis';
}
if($rand ==5){
    echo 'penktadienis';
}
if($rand ==6){
    echo 'sestadienis';
}
if($rand ==7){
    echo 'sekmadienis';
}
?>

<h3>4.Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 –darbo diena, 6-7 –savaitgalis).</h3>
<br>
<br>
<?php
$rand = rand(1,7);
echo $rand;
if($rand ==1 || $rand ==2 || $rand ==3 || $rand ==4 || $rand ==5 ){
    echo 'darbo diena';
}
if($rand ==6 || $rand ==7 ){
    echo 'savaitgalis';
}   
?>
<br>


<h3>5.Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. <br> Skaičiai dalūs iš 3 turi būti atvaizduoti žaliai,
    turintys dalybos iš trijų liekaną vienetą –geltonai, turintys dalybos iš trijų liekaną dvejetą –raudonai.</h3>
<br>
<?php
// $green = '#58D68D';
for ($i = 0; $i < 4; $i++) {
    $atsitiktiniai5=rand(0,100);echo"<br>";
    // print $atsitiktiniai5.',';

if ($atsitiktiniai5%3==0){
    echo "<span style=\"color: green;\">$atsitiktiniai5</span>";
}
if ($atsitiktiniai5%3==1){
    echo "<span style=\"color: yellow;\">$atsitiktiniai5</span>";
}
if ($atsitiktiniai5%3==2){
    echo "<span style=\"color: red;\">$atsitiktiniai5</span>";
}
}

?>
<br>
<br>
<h3>6.Išvesti į ekraną skaičius nuo 0 iki 100.</h3>
<br>
<?php
    for ($x = 0; $x < 101; $x++) {
        echo $x.' ' ;
    }
?>
<br>
<br>

<h3>7.Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.</h3>
<br>
<br>
<?php
    for ($x = 0; $x < 101; $x++) {
        echo ($x*2).'  ' ;
    }
echo"<br>";    
// kitas sprendimas
echo"<br>";
for ($x = 0; $x < 201; $x+=2) {
    echo $x.'  ' ;
}
?>
<br>
<br>
<h3>8.Septintouždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų atvaizduoti mėlynai.</h3>
<br>
<br>
<?php
    for ($x = 0; $x < 201; $x+=2) {       
    if (($x)%6==0){
        echo "<span style=\"color: blue;\">$x  </span>";   
    }else {
        echo $x.'  ';
    }
}
?>
<br>
<br>

<h3>9.Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.</h3>
<br>
<br>
<?php
$i=-1;
while ($i%5!==0){
    $i=rand(1,50);
echo $i;echo"<br>";
}    
?>
<br><br>

<h3>+10.Generuoti atsitiktinius skaičius nuo 1 iki 100tol, kol sugeneruotas skaičius bus dalus iš 5arba iš 11.</h3>
<br>
<br>
<?php
$i=-1;
while (($i%5!==0) && ($i%11!==0)){
    $i=rand(1, 100);
echo $i.' ';
}    
?>
<br><br>
<h3>11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150. </h3>
<br>
<br>
<?php
$sum =0;
while ( $sum<150){
  $i= rand(1,10);
 $sum = $sum+$i;
 echo $i.'  ';
} 
?>
<br><br>

<h3>12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120. <br> Suskaičiuoti kiek
    skaičių buvo sugeneruota.</h3>
<br>
<br>
<?php
$sum =0;
$count=0;
while ( $sum<120){
  $i= rand(1,10);
 $sum = $sum+$i;
 echo $i." "." ";
 $count++; 
} echo "<br>";echo "<br>";
echo $count;
?>
<br><br>

<h3>13. Generuoti atsitiktinius skaičius nuo 1 iki 15tol, kol jų suma bus lygi arba didesnė 175. <br> Surasti didžiausią
    ir mažiausią skaičių.</h3>
<br>
<br>
<?php

$sum=0;
$min=15;
$max=0;

while ($sum < 175 ){
    $rand_num = rand(1, 15);
    $sum += $rand_num;
    if ($rand_num > $max){
        $max = $rand_num;
    }
if ($rand_num < $min){
    $min = $rand_num;
}
echo $rand_num.' ';
}
echo "<br>";
echo "Sum: $sum<br>";
echo "Min: $min<br>";
echo "Max: $max<br>";
?>
<br><br>

<h3>14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200. <br> Surasti skaičių
    vidurkį.</h3>
<?php
$sum14=0;
$kiekis=0;

while ($sum14<=200){
    $i = rand(1, 15);
    $sum14 = $sum14 + $i;
    $kiekis++;
    echo $i.' ';
}
echo "<br>";
$vidurkis = $sum14/$kiekis;
echo "Vidurkis ". $vidurkis;
echo "<br>";
echo "Suma ". $sum14;
echo "<br>";
echo "Kiekis ". $kiekis;
?>
<br><br>


<h3>15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės –skaičiai nuo 1 iki 100.</h3>
<?php
foreach (range(1, 100) as $number){
    echo $number.' ';
}
echo '<br>';
echo '**************kitas sprendimas*******************';
$array = [];
for ($i = 0; $i <= 100; $i++){
    $array [$i] = $i;
}
// echo '<pre>'; print_r($array); echo '</pre>';

?>

<h3>16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės–atsitiktiniai skaičiai nuo 10 iki 25.</h3>

<?php
$array= [];
for($i=0;$i<=100;$i++){
    $array [$i] = rand(10, 25);       
}
//  echo '<pre>'; print_r($array); echo '</pre>';
?>

<h3>17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, <br>
    kurio reikšmės būtų skaičiai nuo 1 iki masyvo ilgio.</h3>
<?php
$number=rand(40,60);
$array=[];
for($i=0; $i<$number; $i++){
    array_push($array,rand(1,$number));
}
echo '<br>';
var_dump($array);
echo'<br>';
echo '****************kitas sprendimas**************************';
echo '<br>';
$num = rand(40, 60);
echo $num;
$random_array3 = [];

for ($i=0; $i<$num; $i++){
    array_push($random_array3, rand(1, $num));
}
foreach ($random_array3 as $item) {
    echo "$item ";
}
?>

<h3>18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės –atsitiktiniai skaičiai nuo 5 iki 47.
</h3>
<?php
$arr = [];
for ($i = 1; $i <= rand(80, 120); $i++){
    $arr [] = rand(5, 47);
}
//  echo '<pre>'; print_r($arr); echo '</pre>';
?>

<h3> 19. Sukurti masyvą, kurioilgis 100, o reikšmės –raidės D, E, F, G, H. </h3>
<?php
 $l = ['D','E','F','G','H'];
 $letters = [];//susikuriam tuscia masyva
 for ($i=0; $i<=100; $i++){
    $letters [] = $l [rand(0, 4)];    
}
// echo '<pre>'; print_r($letters); echo '</pre>';
?>

<h3> 20. Sukurti masyvą, kurio ilgis 100, o reikšmės –raidės M,N,O,P.Suskaičiuoti,kurios raidės buvo daugiausia.</h3>
<?php
$l = ['M', 'N', 'O', 'P'];
$letters = [];
for ($i = 0; $i <= 100; $i++){
$letters [] = $l [rand(0, 3)];
}
print_r($letters);

?>


<h3>21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis 10, o reikšmės skaičiainuo 1 iki 10
    ([1,2,3,4,5,6,7,8,9,10]).</h3>
<?php
$arr = [];
for ($i=0; $i<100; $i++){
    for($x=0; $x<10; $x++){
        $arr[$i][$x]=$x+1;
    }
}
// echo '<pre>'; print_r($arr);
echo '*******************kitas sprendimas********************';
echo '<br>';
$arr1 = $masyvas1 = [];
for ($i=1; count($masyvas1)<10; $i++){
    array_push($masyvas1, $i);
}
// var_dump($masyvas);
while (count ($arr1)<100){
    array_push($arr1, $masyvas1);
}
// echo '<pre>'; print_r($arr1);

?>
<h3>22.Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis 10, o reikšmės atsitiktiniaiskaičiai nuo 1
    iki 17.</h3>
<?php
$arr= [];
for ($i=0; $i<100; $i++){
   for ($j=0; $j<10; $j++){
       $arr[$i][$j]=rand(1,17);
   }
}
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
?>

<h3>23. Sugeneruoti masyvą, <br> kurio ilgis 100, <br> o reikšmės –masyvai, <br> kurių ilgis atsitiktinis <br> nuo 5 iki 18, <br> o reikšmės
    –skaičiai <br> nuo 1 iki masyvo ilgio.</h3>
<?php
$arr1 = [];
for($i=0;$i<100; $i++){
    $arr2 = [];    
    for($j=0; $j<=rand(5, 18); $j++){
        array_push($arr2,$j);
    }    
 array_push($arr1, $arr2);
}
// echo '<pre>';
// print_r($arr1);
?>

<h3>24. Sugeneruoti masyvą, <br> kurio ilgis 100, <br> o reikšmės –masyvai, <br> kurių ilgis atsitiktinis <br> nuo 5 iki 18, <br> o reikšmės
    –atsitiktiniai skaičiai <br> nuo 5 iki 30.</h3>
<?php
$total = [];
for ($row = 0; $row < 100; $row++){
    $len = rand(5, 18);
    for($col = 0; $col < $len;$col++){
        $total[$row][$col]=rand(5, 30); 
    }
}
// echo '<pre>'; print_r($total); echo '</pre>';
?>


<h3>25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės
    –atsitiktiniai skaičiai nuo 5 iki 75.Surasti didžiausią skaičių visame didžiajame masyve.</h3>
    <?php
    $array1 = [];
    $max = 0;
    for ($i = 0; $i<=5; $i++){
        $array2 = [];
        for ($j=0; $j<rand(5, 18); $j++){
            array_push($array2, rand(5, 75));
        }
        array_push($array1, $array2);
    }
    foreach ($array1 as $value){
        //  echo '<pre>'; print_r($value); echo '</pre>';
        foreach ($value as $number){
            //  echo '<pre>'; print_r($number); echo '</pre>';
            if ($number>$max){
                $max=$number;
            }
        }
    }
     echo 'max number = ' .$max;
     echo '<pre>'; print_r($array1); echo '</pre>';

    ?>
<h3>26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės
    –atsitiktiniai skaičiai nuo 5 iki 75.Surasti mažiausiąskaičių visame didžiajame masyve ir kiek kartų jis
    pasikartojo.</h3>
    <?php
    $array1 = [];
    $min = 75;
    $sum = 0;
    for ($i=0; $i<10; $i++){
        $array2 = [];
        for ($j=0; $j<rand(5, 18); $j++){
            array_push($array2, rand(5, 75));
        }
        array_push($array1, $array2);
    }
    foreach ($array1 as $value){
        foreach ($value as $number){            
            if ($number<$min){
                $min=$number;
                $sum = 0;
            }
            if ($number==$min){
                $sum++;
            }
        }
    }  
     echo 'min number = ' .$min; echo '<br>';echo '<br>';
     print_r($sum); echo '<br>';
    // $array3 = [];echo '<br>';
    // array_push($array3, $min);echo '<br>';
    // print_r(count($value));echo '<br>';
      echo '<pre>'; print_r($array1); echo '</pre>';

    ?>


<h3>27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis 10, o reikšmės atsitiktiniaiskaičiai nuo 1 iki 17.Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.</h3>
    <?php
    $array1 = [];
    for ($i=0; $i<=5; $i++){
        $array2 = [];
        for($j=0; $j<=10; $j++){
            array_push($array2, rand(1, 17));
        } asort($array2);       
        array_push($array1, $array2);
    }
     echo '<pre>'; print_r($array1); echo '</pre>';
    // print_r(sort($array2));
    ?>


<h3>28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis 10, o reikšmės atsitiktiniaiskaičiai nuo 1 iki 17.Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių sumas didėjančia tvarka.</h3>
    <?php
//     $a = [1,8,2,66,69,14,25,712,1,2,5];
//  var_dump($a);
//  echo '<br>';
//  for ($i = 0; $i < count($a); ++$i){
//    for($j = 0; $j < count($a); ++$j){
//          if (array_sum([$a][$i]) < array_sum([$a][$j])){
//              $temp = $a[$i];
//              $a[$i] = $a[$j];
//              $a[$j] = $temp;
//          }
//      }
//  }
//  var_dump($a); 
    ?> 

<h3>29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės –masyvai,kurių ilgis 10, o reikšmės atsitiktiniaiskaičiai nuo 1 iki 17.Iš dvimačio masyvo sukurti vieną vienmatį masyvą –visas dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.
</h3>
<?php
$array1=[];
$array2=[];
$array3= [];

for($i=0; $i<5; $i++){
    $array1=[];
    for($j=0; $j<11; $j++){
        array_push($array1, rand(1, 17));
    } array_push($array2, $array1);
}
foreach($array2 as $array4){
    foreach($array4 as $item){
        array_push($array3, $item);
    }
}
echo '<pre>' . print_r($array2, true) .'</pre>';
echo '<pre>' . print_r($array3, true) .'</pre>';

?>

<h3>30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme, kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės aritmetinis vidurkis</h3>



<h3>31. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.</h3>
<?php
function text($text1){
    return'<h1>'.$text1.'</h1>';
}
$text2 = text('tekstas yterpiamas i h1 taga');
echo $text2;
?>


<h3>32. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų skaičių sumą.</h3>
<?php
$sum = 0;
function duKintamieji($i, $j){
    if ((is_numeric($i)) &&(is_numeric($j))){
        $sum = $i+$j;
        return $sum;
    }
}
echo duKintamieji(3,4);
?>


<h3>33. Parašyti funkciją, kuri priima du 
kintamuosius. Patikrina ar jie yra skaičiai.Palygina tuos du skaičius ir grąžina rezultatą ar pirmas skaičius yra
didesnis,ar antras,ar jie yra lygūs.</h3>
<?php
function duKintamieji33($i, $j){
    if ((is_numeric($i))&& (is_numeric($j))){
        if ($i>$j){
            return'pirmas skaicius yra didesnis';
        } elseif ($i<$j){
            return 'antras skaicius yra didesnis';
        } else {
            return 'skaiciai lygus';
        }
    }
}
echo duKintamieji33(7, 5);
?>

<h3>34. Parašyti funkciją, kuri priimtų vieną kintamajį.Turi patikrinti ar tai yra
skaičiu ir ar tai yra keturženklis skaičius. Turi būti grąžinamas rezultatas ar tie metai yra keliemieji.</h3>
<?php
function metai($metai){
    if ((is_numeric($metai)) || (strlen($metai==4))){
        if ($metai%4==0){
            return 'metai keliamieji';
        } else {
            return 'metai nekeliamieji';
        }
    }
}
echo metai(2036);

?>

<h3>35. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi būti patikrinimas ar tas kintamasis yra skaičius. Funkcija turi grąžinti skaičių, kur įvesto skaičiaus skaitmenys būtų išrikiuoti didėjimo tvarka.</h3>

36. Parašykite funkciją, kuri skaičiuotų, iš
kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad
būtų galima įvesti tik sveiką skaičių.

37. Parašyti funkcijątelefonoNumeris, kuri priima vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra masyvas,
kad jo visi elementai yra skaičiai ir, kad jo ilgis yra 10. Funkcija turi grąžinti telefono numerį tokiu formatu -"(XXX)
XXX-XXXX".

38. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra
skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminisskaičius yra tas, kuris dalinasi tik iš
savęs ir tik iš vieneto be liekanos.)

39. Parašyti funkciją -lygineSuma. Funkcijos parametrai -du kintamieji. Testų reikalavimai -abu kitamieji turi būti arba
skaičiai arba masyvai(negali būti vienas skaičius, kitas masyvas).Jei kintamieji skaičiai, grąžinti skaičių sumą, jei
kintamieji masyvai -grąžinti masyvų ilgių sumą. Jei suma nelyginė -grąžinti tekstą, kad suma nelyginė.

40. Funkcija turi priimti du kintamuosius.Vienas turi būti skaičius, kitasmasyvas su skaičiais ir minimum 7 elementais.
Funkcija turi grąžinti true, jei skaičius yra masyve, ir false, jei nėra tokio skaičiaus masyve.

<?php
// $a = [1,8,2,66,69,14,25,712,1,2,5];
// var_dump($a);
// echo '<br>';
// for ($i = 0; $i < count($a); ++$i){
//     for($j = 0; $j < count($a); ++$j){
//         if (array_sum($a[$i]) < array_sum($a[$j])){
//             $temp = $a[$i];
//             $a[$i] = $a[$j];
//             $a[$j] = $temp;
//         }
//     }
// }
// var_dump($a);

?>