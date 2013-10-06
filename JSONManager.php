<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JSONManger
 *
 * @author Spencer
 */
class JSONManager {

    private $complete = array();
    private $development = array();

    public function __construct($name) {
        $projects = json_decode(file_get_contents("$name.json"), true);
        $projarray = $projects["projects"];
        foreach ($projarray as $proj) {
            if ($proj["complete"]) {
                array_push($this->complete, $proj);
            } else {
                array_push($this->development, $proj);
            }
        }
    }

    public function getDevelopment() {
        return $this->development;
    }

    public function getComplete() {
        return $this->complete;
    }

    public function printProject($proj) {
        if ($proj["display"]) {
            echo "<div class=\"project-shell\">";
            echo "<div class=\"project-image\" style=\"background-image: url('" . $proj["bg"] . "')\">";
            echo "<div class=\"project" . (($proj["complete"]) ? " complete" : " incomplete") . "\">";

            echo "<div class=\"project-content\">";

            echo "<span class=\"title\"><a href=\"" . $proj["loc"] . "\">" . $proj["name"] . "</a></span>";
            echo "<span class=\"desc\">" . $proj["desc"] . "</span>";

            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }

}

?>
