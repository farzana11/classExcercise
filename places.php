<?php


$places=array(
    array('city'=>'Tokyo',
        'country'=>'Japan',
        'continent'=>'Asia'),
    array('city'=>'Mexico city',
        'country'=>'Mexico',
        'continent'=>'North America'),
    array('city'=>'New York',
        'country'=>'USA',
        'continent'=>'North America'),
    array('city'=>'Mumbai',
        'country'=>'India',
        'continent'=>'Asia'),
    array('city'=>'Seoul',
        'country'=>'Koria',
        'continent'=>'Asia'),
    array('city'=>'Tokyo',
        'country'=>'Japan',
        'continent'=>'Asia'),
    array('city'=>'Shaughai',
        'country'=>'China',
        'continent'=>'Asia'),
    array('city'=>'Logos',
        'country'=>'Naijiria',
        'continent'=>'Africa'),
    array('city'=>'London',
        'country'=>'UK',
        'continent'=>'Europe'),

);
foreach ($places as $bkict){
    echo $bkict['city'].'-'.$bkict['country'].'-'.$bkict['continent'] ,'</br>';
}
print_r($places);
echo $places[3];
echo $places[3]['continent'];
echo $places[3]['country']='bangladesh';
echo $places[3]['city'];
echo $places[3]['country'];


    ?>