<?php

class HomePage extends Model {

    public function getList($limit) {
        if (urlArrayPos(1)) {
            $sql = "SELECT * FROM " . urlArrayPos(1) . "_content WHERE Status = 1 AND Approved = 1 ORDER BY ID DESC LIMIT 0,$limit";
            return $this->db->prepare($sql);
        } else {
            $sql = "SELECT * FROM en_content WHERE Status = 1 AND Approved = 1 ORDER BY ID DESC LIMIT 0,$limit";
            return $this->db->prepare($sql);
        }
    }

    public function getByAlias($alias) {
        if (urlArrayPos(1)) {
            $sql = "SELECT * FROM " . urlArrayPos(1) . "_content WHERE '{$alias}' = ID AND Status = 1";
            $singleFile = $this->db->prepare($sql);
            return $singleFile->fetch();
        } else {
            $sql = "SELECT * FROM en_content WHERE '{$alias}' = ID AND Status = 1";
            $singleFile = $this->db->prepare($sql);
            return $singleFile->fetch();
        }
    }

    public function getAdminUsers($username, $password) {
        $sql = "SELECT * FROM admin_users WHERE Username = '{$username}' AND Password = '{$password}' AND Login_Attempt_Count <= 3 AND Status = 1";
        $admin_users = $this->db->prepare($sql);
        return $admin_users->fetch();
    }

    public function adminUserUpdateAttemp($attemp, $username) {
        $sql = "UPDATE admin_users SET Login_Attempt_Count = '{$attemp}' WHERE Username = '{$username}' AND Login_Attempt_Count <= 3 AND Status = 1";
        return $this->db->prepare($sql);
    }

    public function adminUserUpdateLastLoggedIn($lastLoggedIn, $username, $id) {
        $sql = "UPDATE admin_users SET Last_Logged_in = '{$lastLoggedIn}' WHERE Username = '{$username}' AND ID = '{$id}' AND Login_Attempt_Count <= 3 AND Status = 1";
        return $this->db->prepare($sql);
    }

}
