<?php
namespace Transfer;
/*
This Class I copy it from some one
*/
class StrangePacket extends \pocketmine\network\protocol\DataPacket
{
	const NETWORK_ID=0x1b;
        
	public $address;
        
	public $port=19132;
         # donot ask me why i make that XD
	public function pid(){return 0x1b;}public function decode(){}public function encode($version=4){$this->reset();$this->putByte($version);if($version===4){foreach(explode('.',$this->address) as $b){$this->putByte((~((int)$b))&0xff);unset($b);}$this->putShort($this->port);}else{}}
}
?>
