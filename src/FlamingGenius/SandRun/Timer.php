<?php
namespace FlamingGenius\SandRun;
use pocketmine\level\Position;
use pocketmine\scheduler\PluginTask;
use pocketmine\Player;
class Timer extends PluginTask{
 public $plugin;
 public $seconds;
 public function __construct(SandRun $plugin, Player $player){
  parent::__construct($plugin);
  $this->plugin = $plugin;
  $this->seconds = $this->getPlugin()->getConfig()->get("seconds");
 }
 public function getPlugin(){
  return $this->plugin;
 }
 public function onRun($currentTick){
  $x = $this->getPlugin()->getConfig()->get("x");
  $y = $this->getPlugin()->getPlugin()->getConfig()->get("y");
  $z = $this->getPlugin()->getConfig()->get("z");
  $level = $this->getPlugin()->getConfig()->get("level");
  if($seconds == 0){
   $player->teleport(new Position($x,$y,$z,$this->getPlugin()->getServer()->getLevelByName($level)));
  }
   else{
    $seconds--;
   }
 }
}
