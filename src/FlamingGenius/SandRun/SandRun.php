<?php
namespace FlamingGenius\SandRun;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\Event;
class SandRun extends PluginBase implements Listener{
 public $timer = [];
 public function onEnable(){
  $this->saveDefaultConfig();
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }
 
 public function onLobbyJoin(PlayerJoinEvent $event){
  $lobby = $this->getConfig()->get("lobby-world");
  $players = count($this->getServer()->getLevelByName($lobby)->getPlayers());
  $min = $this->getConfig()->get("min-players");
  $max = $this->getConfig()->get("max-players");
  $x = $this->getConfig()->get("seconds");
  if($players >= $min){
   $timer = new Timer($this);
   $h = $this->getServer()->getScheduler()->scheduleRepeatingTask($timer, 20);
   $this->timer[$timer->getTaskId] = $timer->getTaskId();
   for($x; ; $x--){
    $this->getServer)->broadcastMessage("Game starting in" . $x);
   }
  }
  elseif($players < $min){
   $this->getServer()->broadcastMessage("Waiting for more people");
  }
  elseif($players > $max){
   $this->getServer()->broadcastMessage("Too many players in lobby");
  }
 }
}
