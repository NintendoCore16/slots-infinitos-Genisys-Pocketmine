<?php
#plugin echo por NintendoCore
namespace NintendoCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;

class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("PluginBase slots");
	}
	
	public function onPlayerKick(PlayerKickEvent $event) {
		if($event->getReason() === "disconnectionScreen.serverFull")
		$event->setCancelled(true);
	}
}