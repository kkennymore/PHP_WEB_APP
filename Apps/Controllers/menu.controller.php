<?php

class Menu extends Model {
    function mainMenu() {
        $menuResult = $this->db->prepare("SELECT * FROM menu WHERE Page_cat = 'front' AND Status = 1 ORDER BY Position ASC");
        return $menuResult;
    }
    function adminMenu(){
        $adminmenu = $this->db->prepare("SELECT * FROM menu WHERE Page_cat = 'back' AND Status = 1 ORDER BY Position ASC");
        return $adminmenu;
    }

    function languages() {
        $langResult = $this->db->prepare("SELECT * FROM languages WHERE Status = 1 ORDER BY ID ASC");
        return $langResult;
    }
    function subMenu($mainMenuName){
        $submenu = $this->db->prepare("SELECT * FROM submenu WHERE MenuName = '".$mainMenuName."' AND Status = 1 ORDER BY Position ASC");
        return $submenu;
    }

}
