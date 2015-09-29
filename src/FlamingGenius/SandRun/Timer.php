<?php
namespace FlamingGenius\SandRun;

use pocketmine\scheduler\PluginTask;

//line6
class Timer extends PluginTask{
 
 public $plugin;
 public $seconds;
 
//line 12
 public function __construct(SandRun $plugin, player $player, $time){
  parent::__construct($plugin);
  $this->plugin = $plugin;
  $this->seconds = $this->getConfig()->get("seconds");
 }
 //line 18
 public function getPlugin(){
  return $this->plugin;
 }
 
 public function onRun($tick){
  $x = $this->getConfig()->get("x");
  $y = $this->getConfig()->get("y");
  $z = $this->getConfig()->get("z");
  $level = $this->getConfig()->get("level");
//line 28
  if($seconds == 0){
   $player->teleport(new position($x,$y,$z,$level));
  }
   else{
    $seconds--;
   }
 }
//line 36


}

?>
