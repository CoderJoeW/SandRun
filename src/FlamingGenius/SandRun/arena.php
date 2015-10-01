<?php

namespace FlamingGenius\SandRun;

use pocketmine\utils\TextFormat;
use pocketmine\event\PlayerJoinEvent;

class arena{
  public function onArenaJoin(PlayerJoinEvent $event){
    $players = $event->getServer()->getOnlinePlayers();
    foreach($players as $player){
     $player->getName();
     $this->getServer()->broadcastMessage($player . "Has Connected");
    }
  }
}
?>
