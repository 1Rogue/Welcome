<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SalemFarm
 *
 * @author Spencer
 */
class SalemFarm implements Project {
    
    public function getDesc() {
        return "Salem Farm is the farm that my mother owns and maintains. I am
            creating a website for her to use for the entirety of her farm. The
            site will display horses that live on the farm as well as general
            information about the farm in general.";
    }
    
    public function isComplete() {
        return false;
    }

    public function getLoc() {
        return "http://1rogue.com/salem/";
    }

    public function getName() {
        return "Salem Farm";
    }

    public function getPict() {
        return "http://i.imgur.com/t6jzsUW.png";
    }    
}

?>
