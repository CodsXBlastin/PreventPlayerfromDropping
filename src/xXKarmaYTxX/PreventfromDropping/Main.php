<?php

namespace xXKarmaYTxX/PreventfromDropping;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\Plugin\PluginBase;
use pocketmine\Command;
use pocketmine\CommandSender;
use pocketmine\event\player\PlayerItemDromEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener [

	public function onEnable [] {
		$this->getServer()->getPluginManager->registerEvents($this,$this);
	
	//public function onCommand (CommandSender $sender, Command $cmd, string $label array $args) : bool{}
		
	public function onDrop (PlayerDropItemEvent $event){
		$player = $event->getPlayer();
		$item = $event->getItem();
		
		switch($item){
	            if ($item->getID() == 1){
		        $event->getCancelled(true);
			    $player->sendMessage(TextFormat::RED . "You are not allowed to drop items here.");
		
		    }elseif ($item->getID() == 2){
			$event->getCancelled(true);
			    $player->sendMessage(TextFormat::RED . "You are not allowed to drop items here.");
		    }
		}
	}
