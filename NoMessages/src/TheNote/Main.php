<?php

namespace TheNote;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main 
extends PluginBase 
implements Listener {
    
    public function onEnable() {       
        $this->getLogger()->info(C::GREEN . "NoJoinMessage wurde aktiviert!");
        $this->getLogger()->info(C::AQUA . "Du siehst nun Keine Join Nachrrichten mehr.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);      
    }
    public function onDisable(){   
        $this->getLogger()->info(C::RED . "NoJoinMessage wurde deaktiviert!");       
    }
    public function onPlayerJoin(PlayerJoinEvent $e){
        $e->setJoinMessage(null);
    }
}
