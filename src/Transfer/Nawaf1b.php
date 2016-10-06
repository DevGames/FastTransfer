<?php

namespace Transfer;

class Nawaf1b
extends \pocketmine\plugin\PluginBase 
implements \pocketmine\event\Listener

{
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }    
    
    public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $command, $label, array $args) {
        if(strtolower($command->getName()) == "transfer"){
            if(isset($args[0]) && isset($args[1]) && isset($args[2])){
            if($args[0] == "me"){
                $args[0] = $sender->getName();
            }
            if(!$this->getServer()->getPlayer($args[0])->isOnline())return;
            
            $api = clone new API();
            $api->Transfer($args[1], intval($args[2]), $this->getServer()->getPlayer($args[0]));
            $sender->sendMessage("Sueccefly Transfer :)");
            }else{
                $sender->sendMessage("/Transfer <playername || me><ip><port>");
            }    
        }
    }
    
}
?>
