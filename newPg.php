<?php 

include 'dado.php';
include 'races.php';
include 'classes.php';

function newStats(&$stats){

    for($i = 0; $i < 6; $i++){
        rollStat($stats[$i]);   
    }
}

function rollStat(&$statValue){
    $min = 6;

    for($i = 0; $i < 4; $i++){
        $d6 = dado(1,6);
        $statValue = $statValue + $d6;
        
        if($d6 < $min){
            $min = $d6;
        }
    }
    $statValue = $statValue - $min;
}

function newRace(&$race, &$raceDescription, &$raceLink){
    static $arrRaces = array("dragonborn","dwarf","elf","halfling","human","gnome","half_elf","half_orc","tiefling");
    $dRace = dado(0,8);
    $race = $arrRaces[$dRace];
    whatRace($race, $raceDescription, $raceLink);
}

function newClass(&$class, &$classDescription, &$classLink){
    static $arrClasses = array("barbarian","bard","cleric","druid","fighter","monk","paladin","ranger","rogue","sorcerer","warlock","wizard");
    $dClass = dado(0,11);
    $class = $arrClasses[$dClass];
    whatClass($class, $classDescription, $classLink);
}

?>