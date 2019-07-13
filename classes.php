<?php 

//classes: "barbarian","bard","cleric","druid","fighter","monk","paladin","ranger","rogue","sorcerer","warlock","wizard"

function whatClass(&$class, &$classDescription, &$classLink){
    
    if($class === "barbarian") {
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/342/420/618/636272680339895080.png";
        $classDescription = "Oh i see you are man of culture as well.";
        $classLink = "https://www.dndbeyond.com/classes/barbarian";
    }

    else if ($class === "bard"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/369/420/618/636272705936709430.png";
        $classDescription = "Doot doot magic flute."; 
        $classLink = "https://www.dndbeyond.com/classes/bard";
    }

    else if ($class === "cleric"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/371/420/618/636272706155064423.png";
        $classDescription = "Finally an healer, thank you app."; 
        $classLink = "https://www.dndbeyond.com/classes/cleric";
    }

    else if ($class === "druid"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/346/420/618/636272691461725405.png";
        $classDescription = "I can sense your happiness from here."; 
        $classLink = "https://www.dndbeyond.com/classes/druid";
    }

    else if ($class === "fighter"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/359/420/618/636272697874197438.png";
        $classDescription = "Wow a Fighter... We surely don't have another one in party..."; 
        $classLink = "https://www.dndbeyond.com/classes/fighter";
    }

    else if ($class === "monk"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/489/420/618/636274646181411106.png";
        $classDescription = "Congratulation, you'll never use a weapon."; 
        $classLink = "https://www.dndbeyond.com/classes/monk";
    }

    else if ($class === "paladin"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/365/420/618/636272701937419552.png";
        $classDescription = "Am i disabled?"; 
        $classLink = "https://www.dndbeyond.com/classes/paladin";
    }

    else if ($class === "ranger"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/367/420/618/636272702826438096.png";
        $classDescription = "Sharpshooter."; 
        $classLink = "https://www.dndbeyond.com/classes/ranger";
    }

    else if ($class === "rogue"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/384/420/618/636272820319276620.png";
        $classDescription = "I have faith in your DEX."; 
        $classLink = "https://www.dndbeyond.com/classes/rogue";
    }

    else if ($class === "sorcerer"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/485/420/618/636274643818663058.png";
        $classDescription = "I use magic because i use magic."; 
        $classLink = "https://www.dndbeyond.com/classes/sorcerer";
    }

    else if ($class === "warlock"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/375/420/618/636272708661726603.png";
        $classDescription = "You've sold your soul to me, nice deal."; 
        $classLink = "https://www.dndbeyond.com/classes/warlock";
    }

    else if ($class === "wizard"){
        $class = "https://media-waterdeep.cursecdn.com/avatars/thumbnails/6/357/420/618/636272696881281556.png";
        $classDescription = "You've studied all your life and you are 63 years old now. You can go to adventuring and probably do less things than a sorcerer baby. Good luck."; 
        $classLink = "https://www.dndbeyond.com/classes/wizard";
    }
}    
?>