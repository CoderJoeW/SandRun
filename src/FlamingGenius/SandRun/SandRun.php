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
 public function createTask(){
  $timer = new Timer($this);
  $h = $this->getServer()->getScheduler()->scheduleRepeatingTask($timer, 20);
  $this->timer[$timer->getTaskId] = $timer->getTaskId();
 }
 public function onLobbyJoin(PlayerJoinEvent $event){
  $lobby = $this->getConfig()->get("lobby-world");
  $players = count($this->getServer()->getLevelByName($lobby)->getPlayers());
  $min = $this->getConfig()->get("min-players");
  if($players >= $min){
   //idk what you want to do here, so i'll just leave this alone
  }
 }
}
