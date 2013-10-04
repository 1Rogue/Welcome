<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author Spencer
 */
interface Project {
    
    public function getName();
    public function isComplete();
    public function getDesc();
    public function getPict();
    public function getLoc();
    
}

?>
