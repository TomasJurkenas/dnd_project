<?php
//$ceu = [
//"Italy" => "Rome",
//"Luxembourg" => "Luxembourg",
//"Belgium" => "Brussels",
//"Denmark" => "Copenhagen",
//"Finland" => "Helsinki",
//"France" => "Paris",
//"Slovakia" => "Bratislava",
//"Slovenia" => "Ljubljana",
//"Germany" => "Berlin",
//"Greece" => "Athens",
//"Ireland" => "Dublin",
//"Netherlands" => "Amsterdam",
//"Portugal" => "Lisbon",
//"Spain" => "Madrid",
//"Sweden" => "Stockholm",
//"United Kingdom" => "London",
//"Cyprus" => "Nicosia",
//"Lithuania" => "Vilnius",
//"Czech Republic" => "Prague",
//"Estonia" => "Tallin",
//"Hungary" => "Budapest",
//"Latvia" => "Riga",
//"Malta" => "Valetta",
//"Austria" => "Vienna",
//"Poland" => "Warsaw",
//] ;
//ksort($ceu);
//foreach ($ceu as $v => $val){
//
////    echo "$v=$val<br>";
//    echo "$v  = " . $val . "<br>";
//
//}
//$masyvoIlgis= count($ceu);
//$keys =array_keys($ceu);
//
//$x=2;
//for ($i=0; $i<$masyvoIlgis; $i++){
//    if ($i % $x ==0){
//        echo $ceu[$keys[$i]]."<br>";
//
//    }
//}
//foreach ($ceu as $v => $val){
//    if ($val==$char = 'A'){
//        echo $val.'<br>';
//    }
//}
//
//$temp = [ 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
//];
//$masyvIlgis =count ($temp);
//function vidutine($temp){
//    print_r(array_sum($temp)/count ($temp));
//
//}
//echo 'vidutine temperatura:'. vidutine($temp);
//$mazasis=[];
//function maziausios ($temp){
//for ($i=0; $i<5; $i++){
//    $mazasis=[min($temp)];
//
////    $reiksme_push($temp);
////     mazsasis_push(min($temp));
//
//}
//
//}
//echo 'penkios maziausios temperaturos'. maziausios($temp);


include '../src/Car.php';

    $car = new Car('green', '0 km/h', 10);

    $database = new Database();
    $car = $database->saveData($car);

    echo 'We are driving ' . $car->getColor() . ' car<br>';
    echo 'Current speed is: ' . $car->getCurrentSpeed() . '<br>';
    echo 'Current millage is: ' . $car->getMillage() . '<br>';
    $amount = 10;
    echo 'Let\'s fill ' . $amount . ' litres of gasoline<br>';
    $car->fillGasoline($amount);
    $newSpeed = '50km/h';
    $car->changeColor('red');
    echo 'Currently We are driving ' . $car->getColor() . ' car at ' .  $newSpeed . '<br>';
    $car->setCurrentSpeed($newSpeed);
    $car->drive(75);
    // ...
    $car->drive(75);
    echo 'Curreen speed is: ' . $car->getCurrentSpeed() . '<br>';
    echo 'Curreen millage is: ' . $car->getMillage() . '<br>';

    $database->update($car);





