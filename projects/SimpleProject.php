<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SimpleProject
 *
 * @author Spencer
 */
class SimpleProject implements Project {
    
    public function getDesc() {
        return "SimpleProject was a small project I initially made for my first
            lab assignment at RIT. It was supposed to be a Hello World, but I got
            told \"Show what you know\". So, a lot of effort for little payoff,
            but it's still a fun little demonstration of different java concepts.";
    }
    
    public function isComplete() {
        return true;
    }

    public function getLoc() {
        return "https://github.com/1Rogue/SimpleProject";
    }

    public function getName() {
        return "SimpleProject";
    }

    public function getPict() {
        return "http://i.imgur.com/aC0KIRT.png";
    }    
}

?>
