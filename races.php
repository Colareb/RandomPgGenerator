<?php

//races: "dragonborn","dwarf","elf","halfling","human","gnome","half_elf","half_orc","tiefling"

function whatRace(&$race, &$raceDescription, &$raceLink){
    
    if($race === "dragonborn") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/340/420/618/636272677995471928.png";
        $raceDescription = "You are born from the fire, you are born from the dragons, you are born, Dragon Born.";
        $raceLink = "https://www.dndbeyond.com/races/dragonborn";
    }

    else if($race === "dwarf") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/254/420/618/636271781394265550.png";
        $raceDescription = "You have dropped a beer!!! Now you have to drink it.";
        $raceLink = "https://www.dndbeyond.com/races/dwarf";
    }

    else if($race === "elf") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/7/639/420/618/636287075350739045.png";
        $raceDescription = "What a magnificient creature.";
        $raceLink = "https://www.dndbeyond.com/races/elf";
    }

    else if($race === "halfling") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/256/420/618/636271789409776659.png";
        $raceDescription = "We all know that you are only an Hobbit.";
        $raceLink = "https://www.dndbeyond.com/races/halfling";
    }

    else if($race === "human") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/258/420/618/636271801914013762.png";
        $raceDescription = "You are another insignificant Human... I'm sorry for you.";
        $raceLink = "https://www.dndbeyond.com/races/human";
    }

    else if($race === "gnome") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/334/420/618/636272671553055253.png";
        $raceDescription = "Smaller is better.";
        $raceLink = "https://www.dndbeyond.com/races/gnome";
    }

    else if($race === "half_elf") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/481/420/618/636274618102950794.png";
        $raceDescription = "Half-Elf = Edgy guy of the party.";
        $raceLink = "https://www.dndbeyond.com/races/half-elf";
    }

    else if($race === "half_orc") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/466/420/618/636274570630462055.png";
        $raceDescription = "I write Half-Orc you read Barbarian.";
        $raceLink = "https://www.dndbeyond.com/races/half-orc";
    }

    else if($race === "tiefling") {
        $race = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/7/641/420/618/636287076637981942.png";
        $raceDescription = "There are Tieflings in the manual?.";
        $raceLink = "https://www.dndbeyond.com/races/tiefling";
    }
}

?>