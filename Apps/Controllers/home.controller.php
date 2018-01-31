<?php
error_reporting(E_NOTICE ^ E_ALL);
class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new HomePage();
        $this->secure = new security();
    }

    public function page() {
        $this->data = " ";
    }

    public function view() {
        $this->data = "Views ";
    }
    public function admin_users() {
        $this->data = "Views ";
    }
     public function admin_page() {
        if (isset($_POST['LoginBtn'])) {
            $username = $this->secure->kenProtectFunc($_POST['username']);
            $password = $this->secure->kenProtectFunc($_POST['password']);
            $con_pass = $this->secure->kenProtectFunc($_POST['con_pass']);
            if (!empty($username)) {
                if (!empty($password)) {
                    if (!empty($con_pass)) {
                        if ($password === $con_pass) {
                            $ad_users = $this->model->getAdminUsers($this->secure->kenEncrypt($username,$this->secure->encrypKey()), $this->secure->kenhashword($password,$this->secure->passwordSalt()));
                            if ($ad_users) {
                                if ($ad_users['Login_Attempt_Count'] <= 3) {
                                    session_start();
                                    $_SESSION['admin_id'] = $ad_users['ID'];
                                    $_SESSION['admin_username'] = $this->secure->kenDecrypt($ad_users['Username'],$this->secure->encrypKey());
                                    $_SESSION['admin_pass'] = $ad_users['Password'];
                                    $_SESSION['admin_name'] = $this->secure->kenDecrypt($ad_users['Name'],$this->secure->encrypKey());
                                    $_SESSION['admin_email'] = $this->secure->kenDecrypt($ad_users['Email'],$this->secure->encrypKey());
                                    $_SESSION['admin_country'] = $this->secure->kenDecrypt($ad_users['Country'],$this->secure->encrypKey());
                                    $_SESSION['admin_date_joined'] = $ad_users['Date_Joined'];
                                    $_SESSION['admin_last_logged_in'] = $ad_users['Last_Logged_in'];
                                    $_SESSION['admin_role'] = $this->secure->kenDecrypt($ad_users['Role'],$this->secure->encrypKey());
                                    $this->model->adminUserUpdateLastLoggedIn(time(), $this->secure->kenEncrypt($username,$this->secure->encrypKey()), $ad_users['ID']);
                                    $this->model->adminUserUpdateAttemp(0, $this->secure->kenEncrypt($username,$this->secure->encrypKey()));
                                    pageRedirect('/admin/');
                                } else {
                                    session::setFlash("<font color='#901'>Your account is lock due to multiple incorrect account login attemp, please contact the webmaster</font>");
                                    $this->model->adminUserUpdateAttemp($ad_users['Login_Attempt_Count'] ++, $this->secure->kenEncrypt($username,$this->secure->encrypKey()));
                                }
                            } else {
                                session::setFlash("<font color='#901'>Wrong User Credentials</font>");
                                if ($ad_users['Login_Attempt_Count'] <= 3) {
                                    $this->model->adminUserUpdateAttemp($ad_users['Login_Attempt_Count'] + 1, $this->secure->kenEncrypt($username,$this->secure->encrypKey()));
                                } else {
                                    session::setFlash("<font color='#901'>Your account is lock due to multiple incorrect account login attemp, please contact the webmaster</font>");
                                }
                            }
                        } else {
                            session::setFlash("<font color='#901'>Password doesn't match</font>");
                        }
                    } else {
                        session::setFlash("<font color='#901'>Confirm Password</font>");
                    }
                } else {
                    session::setFlash("<font color='#901'>Enter Password</font>");
                }
            } else {
                session::setFlash("<font color='#901'>Enter Username</font>");
            }
        }
    }
   
}
