<?php

namespace Transfer;

class API 
extends StrangePacket 
implements ABI

{
    public $mode = 0;
    
    public function API(){
        $this->mode = 1;
        if(!$this instanceof StrangePacket){
            //$this = new StrangePacket(0,"");
        }
    }

    public function Transfer($ipserver,$portserver,$p) {
     
        if($this->mode == 1){
        
        list($a1,$a2) = array($ipserver,$portserver);
        
        $this->address = $a1;
        $this->port = $a2;

        array_map(
        function ($r1,$r2){
        if($r1 == $r2){
            unset($r1,$r2);
        }
      }, array($a1),array($a2));
        $p->dataPacket($this);
        }

    }
    
    
}
?>
