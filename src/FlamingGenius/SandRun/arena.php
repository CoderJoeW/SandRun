<?php

namespace FlamingGenius\SandRun;

use pocketmine\utils\TextFormat;
use pocketmine\event\PlayerJoinEvent;

class arena{
 $arena = $this->getConfig("arena")->get("arena-world");
 
 public function onArenaJoin(PlayerJoinEvent $event){
  $players = $this->getServer()->getOnlinePlayers();
  foreach($players as $player){
   $name = $event->getPlayer()->getName();
   $this->getServer()->broadcastMessage($name . "Has Connected");
  }
 }
}
?>
