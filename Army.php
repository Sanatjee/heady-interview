<?php

class Army implements ActorInterface{

    private $actors = [];
    

    public function addActor(ActorInterface $actor){
        $this->actors[] = $actor;
    }

    public function bombardingStrength(){
        $strength = 0;
        foreach($this->actors as $actor){
            $strength += $actor->bombardingStrength();
        }
        return $strength;
    }
}