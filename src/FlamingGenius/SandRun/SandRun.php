<?php

namespace FlamingGenius\SandRun;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\Listener;

class SandRun extends PluginBase implements Listener{
 public $timer = [];
 public function onEnable(){
  $this->saveDefaultConfig();
 }
 
 public function createTask(){
  $timer = new Task($this);
  $h = $this->getServer()->getScheduler()->scheduleRepeatingTask($timer, 20);
  $timer->setHandler($handler);
  $this->timer[$timer->getTaskId] = $timer->getTaskId();
 }

 public function onPlayerJoin(PlayerJoinEvent $event){
  $player = $event->getPlayer();
  $playerName = $player->getName();
 }
 
 public function onLobbyJoin(){
  $lobby = $this->getConfig()->get("lobby-world");
  $players = $this->getServer()->getLevelByName($lobby)->getOnlinePlayers();
  $min = $this->getConfig()->get("min-players");
  if(count($players) >= $min){
   
  }
 }


}




?>