<?php

namespace TheNote;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "NoMassage wurde aktiviert!");
		$this->getLogger()->info(C::AQUA . "Du siehst nun Keine Death/Join Nachrrichten mehr.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDisable(){
        $this->getLogger()->info(C::RED . "NoMessage wurde deaktiveiert!");
    }
    
    public function onPlayerDeath(PlayerDeathEvent $e){
        $e->setDeathMessage("");
    }

    public function onPlayerDeath(PlayerJoinEvent $e){
        $e->setJoinMessage("");
    }

    public function onPlayerDeath(PlayerQuitEvent $e){
        $e->setQuitMessage("");
}
