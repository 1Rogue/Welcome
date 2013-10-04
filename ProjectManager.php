<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class_name) {
    include 'projects/' . $class_name . '.php';
}

/**
 * Description of ModuleManager
 *
 * @author Spencer
 */
class ProjectManager {

    protected $arr = array();

    public function __construct() {
        $this->arr = array(
            new SimpleProject(),
            new SalemFarm()
        );
    }

    public function getProjects() {
        return $this->arr;
    }

    public function printProject(Project $project) {
        echo "<div class=\"project-shell\">";
        echo "<div class=\"project-image\" style=\"background-image: url('" . $project->getPict() . "')\">";
        echo "<div class=\"project" . (($project->isComplete()) ? " complete" : " incomplete") . "\">";
        
        echo "<div class=\"project-content\">";
        
        echo "<span class=\"title\"><a href=\"" . $project->getLoc() . "\">" . $project->getName() . "</a></span>";
        echo "<span class=\"desc\">" . $project->getDesc() . "</span>";
        
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

}

?>
